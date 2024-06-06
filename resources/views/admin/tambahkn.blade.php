<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Data') }}
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="border: 2px solid #000;">
                <form action="{{ route('tambah') }}" style="padding: 30px 50px;">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="admin_permission">
                        <label class="form-check-label" for="flexCheckDefault">Check to give admin permission</label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-3">Submit</button>
                    <a href="{{ route('admin') }}" class="btn btn-danger ml-4">Go Back</a>
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