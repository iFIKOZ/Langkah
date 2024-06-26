<x-app-layout>

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
            <form action="{{ url('updatedata/'.$user->id) }}" method="POST" style="padding: 30px 50px;">
            @csrf
            @method('patch')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input value="{{ $user->name }}" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input value="{{ $user->email }}" type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="admin_permission">
                        <label class="form-check-label" for="flexCheckDefault">Check to give admin permission</label>
                    </div>
                    <a href="{{ url('admindb') }}" class="btn btn-danger mr-3">Go Back</a>
                    <button type="submit" class="btn btn-primary  ml-4">Update</button>
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