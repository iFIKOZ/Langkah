<x-app-layout>
<x-slot name="title">
        Explore
    </x-slot>

    <div class="index layout">
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
            <h3>Explore Project</h3>
        </div>

        
        <div class="isihal">

        @foreach($explores as $explora)
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

        <div class="pagination">
        {{$explores->links('pagination::custom')}}

        </div>

</x-app-layout>