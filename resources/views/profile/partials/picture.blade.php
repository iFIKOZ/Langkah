<!-- resources/views/profile/edit.blade.php -->
<header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Picture') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile picture.") }}
        </p>
    </header>

<style>
.profile-picture {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    margin:0rem 0px 1rem 0px;
    border: 2px solid #000;
}
</style>

<div id="propic" style="display:flex;">

    <div>
        <b>Image Preview</b>
        <!--Show Photo Profile -->
        @if (Auth::user()->picture)
            <img src="{{ asset('propic/' . Auth::user()->picture) }}" alt="Profile Picture" class="profile-picture">
        @else
            <!-- Show default profile picture if the user doesn't have one -->
            <img src="{{ Avatar::create(Auth::user()->name)->toBase64(); }}" class="profile-picture">
        @endif
    </div>


    <div style="margin-left:2rem;">
        <form action="{{ route('profile.photo') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="profile_picture"><b>Profile Picture</b></label>
                <input type="file" name="picture" id="profile_picture" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top:1.5rem;">SAVE</button>

            @if (Auth::user()->picture)
                <form action="{{ route('profile.deletePhoto') }}" method="POST" style="margin-top: 1rem;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
            @else
                <button type="x" class="btn btn-danger">DELETE</button>
            @endif
        </form>
    </div>

</div>





