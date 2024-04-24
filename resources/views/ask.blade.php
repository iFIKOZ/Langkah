<x-app-layout>
    <x-slot name="title">
        Forum
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
        <div class="judulhal">
            <h3>Ask A Question</h3>
        </div>

        <div class="index layout">

        <div class="upload">
            <div style="padding: 1rem 2rem;">
                <label for="files" class="drop-container drpfile" id="dropcontainer">
                    <span class="drop-title">Upload or Drop Image Here</span>
                  </label>
                  <div>
                    <input type="file" id="files" class="file-input" accept="file/*" required>
                    <span id="file-chosen-text"></span>
                  </div>
              </div> 

            <div class="form-group" style="padding: 10px 2rem;">
                <label for="exampleFormControlInput1" style="float: left;">Title</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Input the title">
            </div>

            <div class="form-group" style="padding: 10px 2rem;">
                <label for="exampleFormControlInput1" style="float: left;">Insert Description</label>
                <textarea class="form-control frms h-100 h-md-100 " rows="4" placeholder="Insert Step Description"></textarea>
            </div>

            
              

            <div>
                <a href="#" type="button" class="btn btn-success shadow-none mt-3" style="margin-right: 11px;">Submit</a>
            </div>

        </div>

    </div>

</x-app-layout>

