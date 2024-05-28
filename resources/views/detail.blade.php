<x-app-layout>
    <x-slot name="title">
    {{ $detail->title }}
    </x-slot>
<main>
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/phone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/detail.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    
    <div class="index layout" style="">
    
        <div class="step-layout" style="">
            <div class="step-info" style="height: fit-content; margin-right:5rem">

                <div>
                    <h1 style="font-size: 32px;text-align: left;">{{ $detail->title }}</h1>
                </div>

                <hr style="border: 0px solid;margin:1rem 0px 2rem 0px;">


                <div style="text-align: left;flex-direction:row;justify-content:flex-start;">
                    <div>
                        Posted by
                    </div>
                    <div style="color:#494949;margin-left:10px;">
                        <b>{{ $detail->author}}</b>
                    </div>
                    <div style="margin-left:2rem;">
                        Asked
                    </div>
                    
                    <div style="color:#494949;margin-left:10px;">
                       <b>{{ $detail->created_at }}</b>
                    </div>

                    <div style="margin-left:2rem;">
                        Last Updated
                    </div>

                    <div style="color:#494949;margin-left:10px;">
                       <b>{{ $detail->updated_at }}</b>
                    </div>
                    
                </div>
                

                <div style="background-color:#ededed;padding:3rem 2rem;border-radius:5px;margin-top:2rem;">
                    <p> &emsp; {{ $detail->description}}
                    </p>
                </div>

                <div style="margin-top:1rem;"> <!-- Comment -->
                    <h5>Comments</h5>
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="text" action="{{url('savefr/'.Str::slug($detail->title).'/'.$detail->id)}}" method="post"
                        style="display: flex; align-items: center;">
                        @csrf
                        <input name="komen" type="komen" class="form-control" placeholder="Comment" aria-label="Comment"
                            style="flex: 1;">
                        <a href="#">
                            <button type="submit" class="btn btn-primary shadow-none" style="margin-left: 10px;">
                                    Send
                            </button>
                        </a>
                    </form>
                </div>

                <div> <!-- Comment -->
                @if(session('status'))
                    <div class="alert alert-success fade show" role="alert" style="color:white;margin:1rem 2rem;background-color:#00B449;padding:5px;border-radius:3px;">
                        <a style="padding:0px 10px;">
                            {{ session('status') }}
                        </a>
                    </div>
                @endif
                
                    <div class="komen" style="margin-top:1rem;">
                        
                        <div class="komen-user">
                            <div style="margin-right: 10px;">

                            </div>
                            <div class="komen-isi" >
                                @foreach ($comments as $comment)
                                    <div style="font-weight: bold;">{{ $comment->user->name }}</div>
                                    <div>{{ $comment->komen }}</div>
                                @endforeach
                            </div>

                        </div>


                    </div>
                </div>

            </div>

                <div class="step-nav " id="step-nav-bwh">
                    <a href="{{ url('ask') }}">
                        <button type="button" class="btn btn-primary shadow-none">Ask Question</button>
                    </a>
                    <a href="#" type="button" class="mt-5 btn btn-success shadow-none " style="padding:14rem 2rem;background-color:grey;color:white;border-radius:5px;">Advertisement</a>
                </div>
        </div>


    </div>
</main>
</x-app-layout>