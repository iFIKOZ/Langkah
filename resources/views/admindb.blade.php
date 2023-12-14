<x-app-layout style="text-decoration:none;">
    <x-slot name="title">
        Admin Dashboard
    </x-slot>
    <main>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('tambah') }}" class="btn btn-success">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Usertype</th>
                        <th scope="col">Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->usertype }}</td>
                            <td>
                                <a href="{{ url('lihatdata/'.$user->id) }}" class="btn btn-primary mr-3 ml-3">Lihat</a>
                                <a href="{{ url('editdata/'.$user->id) }}" class="btn btn-warning mr-3 ml-3">Edit</a>
                
                                <form action="{{ url('hapus'.$user->id) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
</x-app-layout>