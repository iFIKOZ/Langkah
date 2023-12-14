<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lihat Data') }}
        </h2>
    </x-slot>

<main>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <table class="table" style="margin: 20px 30px;">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Usertype</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Last Updated</th>
                        <th scope="col">Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $users->id }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->usertype }}</td>
                            <td>{{ $users->created_at }}</td>
                            <td>{{ $users->updated_at }}</td>
                            <td>
                            <a href="{{ url('editdata/'.$users->id) }}" class="btn btn-warning mr-3 ml-3">Edit</button>

                            </td>
                        </tr>
                    
                    </tbody>
                    </table>
                    <a href="{{ route('admin') }}" class="btn btn-danger ml-4 mb-3">Kembali</a>
            </div>
            
        </div>
    </div>
</main>
</x-app-layout>