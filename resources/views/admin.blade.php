<x-app-layout>
    <x-slot name="title">
        Admin Dashboard
    </x-slot>

    <div class="py-12">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("Admin Dashboard") }}
                    <br>
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">Edit Profil</a>
                    <a href="{{ route('admin') }}" class="btn btn-warning mt-3">Masuk Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
