<x-app-layout>
    <x-slot name="title">
        Forum
    </x-slot>

    <div class="index layout">
    <link rel="icon" href="library/images/logo/logo.png">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <div class="judulhal">
            <h3>Forum</h3>
        </div>

        <div class="d-flex justify-content-end align-items-center">
            @if(session('status'))
            <div class="alert alert-success fade show" role="alert" 
            style="color:white;margin:1rem 2rem;background-color:#00B449;padding:5px;border-radius:3px;"
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)">
                <a style="padding:0px 10px;">
                {{ session('status') }}
                </a>
            </div>
            @endif

            <div>
            <a href="{{ auth()->check() ? url('ask') : url('login') }}">
                <button type="button" class="btn btn-success shadow-none">Ask Question</button>
            </a>
            </div>



        </div>

        <div class="isihal">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Author</th>
                    </tr>
                </thead>
                <tbody>     
                    @foreach($forums as $foruma)
                    <tr>
                        <td>{{ $foruma->title }}</td>
                        <td>{!!Str::words($foruma->description,8)!!}</td>
                        <td>{{ $foruma->author }}</td>
                        <td><a href="{{ url('detail',$foruma->id) }}"><button type="button" class="btn btn-primary shadow-none">Read More</button></a></td>
                    </tr>
                    @endforeach



                </tbody>
            </table>

            


        </div>

        
        {{$forums->links('pagination::custom')}}
        

</x-app-layout>

