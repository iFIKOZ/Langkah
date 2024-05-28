<x-app-layout>
    <x-slot name="title">
        Ask Forum
    </x-slot>

    <div class="index layout">
    <link rel="icon" href="library/images/logo/logo.png">
    <link rel="stylesheet" type="text/css" href="library/css/layout.css">
    <link rel="stylesheet" type="text/css" href="library/css/style.css">
    <link rel="stylesheet" type="text/css" href="library/css/loader.css">
    <link rel="stylesheet" type="text/css" href="library/css/step.css">
    <link rel="stylesheet" type="text/css" href="library/css/phone.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <div class="judulhal">
            <h3>Ask A Question</h3>
        </div>

        <div class="index layout">


        <div class="d-flex justify-content-start align-items-center">
            <div style="margin-left:2rem;">
                <a href="{{ url()->previous() }}">
                        <button type="button" class="btn btn-danger shadow-none">Go Back</button>
                </a>
            </div>
        </div>

        <form name="ask" id="ask" action="{{ url('ask-store') }}" method="post" style="margin-bottom:3rem;">
    @csrf
    <div class="upload">
        <div class="form-group" style="padding: 10px 2rem;">
            <label for="exampleFormControlInput1" style="float: left;">Title</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input title">
        </div>

        <div class="form-group" style="padding: 10px 2rem;">
            <label for="exampleFormControlTextarea1" style="float: left;">Insert Description</label>
            <textarea name="description" class="form-control frms h-100 h-md-100" rows="4" placeholder="Insert Description"></textarea>
        </div>

        <div style="margin-bottom:5rem;">
            <button type="submit" class="btn btn-success shadow-none">Submit</button>
        </div>
    </div>
</form>


    </div>

</x-app-layout>

