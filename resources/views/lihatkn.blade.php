<x-app-layout>

<main>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="border: 2px solid #c5c5c5;">
            <form action="#" method="POST" style="padding: 30px 50px;">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input value="{{ $user->title }}" class="form-control" id="title" name="title" aria-describedby="emailHelp" disabled readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Author" class="form-label">Author</label>
                            <input value="{{ $user->author }}" type="text" class="form-control" id="author" name="author" aria-describedby="emailHelp" disabled readonly>
                            <input type="hidden" name="author" value="{{ $user->author }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" style="float: left;">Description</label>
                            <textarea name="description" class="form-control frms h-100 h-md-100" rows="5" disabled readonly>{{ $user->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Author" class="form-label">Tools</label>
                            <textarea name="tool" class="form-control frms h-100 h-md-100" rows="5" disabled readonly>{{ $user->tool }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Author" class="form-label">Steps</label>
                            <textarea name="step" class="form-control frms h-100 h-md-100" rows="10" disabled readonly>{{ $user->step }}</textarea>
                        </div>
                    </form>
                    <a href="{{ url('content') }}" class="btn btn-danger ml-4 mb-3">Go Back</a>
                    <a href="{{ url('editkn/'.$user->id) }}" class="btn btn-warning ml-4 mb-3">Edit Post</a>
            </div>
            
        </div>
    </div>
</main>
</x-app-layout>
<style>
.footerr {
    display: none;
}
</style>