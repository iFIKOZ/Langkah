<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Data') }}
        </h2>
    </x-slot>

<main>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="border: 2px solid #c5c5c5;">
            <form action="{{ url('updatekn/'.$user->id) }}" method="POST" style="padding: 30px 50px;">
            @csrf
            @method('PATCH')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input value="{{ $user->title }}" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Author" class="form-label">Author</label>
                        <input value="{{ $user->author }}" type="text" class="form-control" id="author" name="author" aria-describedby="emailHelp" disabled readonly>
                        <input type="hidden" name="author" value="{{ $user->author }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" style="float: left;">Description</label>
                        <textarea name="description" class="form-control frms h-100 h-md-100" rows="5">{{ $user->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Author" class="form-label">Tools</label>
                        <textarea name="tool" class="form-control frms h-100 h-md-100" rows="5">{{ $user->tool }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Author" class="form-label">Steps</label>
                        <textarea name="step" class="form-control frms h-100 h-md-100" rows="10">{{ $user->step }}</textarea>
                    </div>

                    <a href="{{ url('content') }}" class="btn btn-danger mr-3">Go Back</a>
                    <button type="submit" class="btn btn-primary ml-4">Update</button>
                </form>
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