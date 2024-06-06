<x-app-layout>
    <x-slot name="title">
    {{ $stepa->title }}
    </x-slot>
<main>
<link rel="icon" href="library/images/logo/logo pth.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/phone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/step.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
<!-- ATAS -->


    <div class="index layout">

        <div class="step-layout">
            <div class="step-info" style="height: fit-content;">
                <div>
                    <h1>{{ $stepa->title }}</h1>
                </div>

                <div class="step-thumbnail" id="desc" style="text-align: center;">
                    <img src="/postimage/{{ $stepa->image }}" width="80%" style="display: inline-block;">
                </div>
                <div>
                    <div class="step-nav" id="step-nav-ats">
                        <a href="#supplies" type="button" class="btn btn-warning " style="margin: 10px 0px">Tools And Material</a>
                        <a href="#step" type="button" class="btn btn-warning ">Build Step</a>
                    </div>
                </div>

                <div style="margin-top:2rem;">
                    <p> &emsp;{{ $stepa->description }}
                    </p>
                </div>

                <hr style="border: 2px solid orange;">
                <div class="step-step">
                    <div>
                        <h3 style="text-align: center;" id="supplies">Supplies</h3>
                    </div>
                    <div>
                        <ul><b>
                            <p>{!! nl2br(preg_replace('/( step)/i', '<br>$1', e($stepa->tool))) !!}</p>
                          </ul></b>
                    </div>

                    <hr style="border: 2px solid orange;">
                    <div id="step">
                        <h3 style="text-align: center;">Step-By-Step</h3>
                    </div>
                    <div>
                        <p>{!! nl2br(preg_replace('/( step)/i', '<br>$1', e($stepa->step))) !!}</p>

                    </div>

                </div>

                <div style="margin-top:1rem;"> <!-- Comment -->
                    <h5>Comments</h5>
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="text" action="{{url('savest/'.Str::slug($stepa->title).'/'.$stepa->id)}}" method="post"
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

            <div id="jdlindex" style="margin-top: 2rem;">
                <h4>Another Project</h4>
            </div>
            <div class="isihal">
                @foreach($randomUploads as $explora)
                    <a class="isi-link" href="{{ url('step',$explora->id) }}">
                        <div class="card" style="width: 16rem;">
                            <img src="/postimage/{{ $explora->image }}" class="card-img-top" alt="...">
                            <div class="card-body text-start" style="height:6rem;">
                                <h5 class="card-title">{!!Str::words($explora->title,3)!!}</h5>
                                <p class="card-text fw-bold" ><small class="text-muted">Posted By {{ $explora->author }}</small></p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            </div>




            </div>
                <div class="step-nav " id="step-nav-bwh" style="margin-left:2rem;">
                    <a href="#supplies" type="button" class="mt-1 btn btn-warning shadow-none" >Tools And Material</a>
                    <a href="#step" type="button" class="mt-1 btn btn-warning shadow-none ">Build Step</a>
                    <a href="" type="button" class="mt-5 btn btn-warning shadow-none " style="padding:15rem 0rem;background-color:grey;">Advertisement</a>
                </div>
        </div>

    </div>
</main>
</x-app-layout>