<x-app-layout>
    <main>
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/phone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/css/step.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8space-y-6">

            <div class="p-4 sm:p-8 bg-white sm:rounded-lg" style="border: 2px solid #c5c5c5;">
                <div>
                    @include('admin.menuadmin')
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-3" style="border: 2px solid #c5c5c5;">
                    <h2 style="text-align: center;margin-top:1rem;">Post</h2>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success"                     
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)">
                        <p >{{ $message }}</p>
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($post as $posts)
                        <tr>
                            
                            <td>{{ $posts->id }}</td>
                            <td>{{ $posts->title }}</td>
                            <td>{{ $posts->author }}</td>
                            <td>
                                <a href="{{ url('lihatkn/'.$posts->id) }}" class="btn btn-primary mr-3 ml-3">See Data</a>
                                <a href="{{ url('editkn/'.$posts->id) }}" class="btn btn-warning  ">Edit Data</a>
                
                                <form action="{{ url('postdel'.$posts->id) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete Data</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                    </table>
                    <div class="pagination">
        {{$post->links('pagination::custom')}}

        </div>
                </div>
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