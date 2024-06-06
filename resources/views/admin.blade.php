<x-app-layout>
    <x-slot name="title">
        Admin Dashboard
    </x-slot>

    <div class="py-12">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden  sm:rounded-lg" style="border: 2px solid #c5c5c5;">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("Admin Dashboard") }}
                    <br>
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">Edit profile</a>
                    <a href="{{ url('admindb') }}" class="btn btn-warning mt-3">User Account</a>
                    <a href="{{ url('content') }}" class="btn btn-secondary mt-3">User Post</a>
                    <a href="{{ url('content') }}" class="btn btn-secondary mt-3">Forum Post</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
.footerr {
    display: none;
}
</style>