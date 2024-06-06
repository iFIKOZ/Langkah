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
            <table class="table" style="margin: 20px 30px;">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
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
                    <a href="{{ url('admindb') }}" class="btn btn-danger ml-4 mb-3">Go back</a>
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