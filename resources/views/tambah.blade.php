<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data') }}
        </h2>
    </x-slot>

<main>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('tambah') }}" style="padding: 30px 50px;">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
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
                    <a href="{{ route('admin') }}" class="btn btn-danger ml-4">Kembali</a>
                </form>
            </div>
            
        </div>
    </div>
</main>
</x-app-layout>