<x-app-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <a href="{{url('explore')}}">
      <div style="background-color:#ff6000;text-align: center;">
      <img src="{{ asset('library/images/logo/homeheader.png') }}" style="display: inline-block;width: 45rem; height: auto;">
      </div>  
    </a>
<main>
<link rel="stylesheet" type="text/css" href="{{ asset('library/css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/phone.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    
    <div class="index layout">
    <div class="judulhal phone">

    </div>
    <div class="tentangweb">
      <div>
      <b>LANGKAH</b> means step in English. This name 
      is the same as the steps taken in making a handicraft. 
      With this website, it is expected to provide tutorials 
      related to handicrafts.
      </div>



      <div>With <b>LANGKAH</b>, users can access various handicrafts, share and appreciate
        other crafts from other users on this website.</div>


    </div>

    <h3>Explore Project</h3>
    <div id="jdlindex" style="margin-top: 2rem;">
      <h4>Most Recent</h4>
    </div>
    <div class="isihal">
    @foreach($hmrecent as $explora)
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

    <div id="jdlindex">
      <h4>Explore More</h4>
    </div>
    <div class="isihal">
    @foreach($hmexp as $explora)
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
</main>
</x-app-layout>