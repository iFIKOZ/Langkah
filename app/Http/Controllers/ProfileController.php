<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function photo(Request $request)
    {
        $request->validate([
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $user = Auth::user();
    
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('propic', $imageName);
    
            // Save the file path to the database
            $user->picture = $imageName;
        }
    
        $user->save();
    
        return redirect()->back()->with('status', 'Profile updated successfully!');
    }
    
    public function deletePhoto()
    {
    $user = Auth::user();
    
    if ($user->picture) {
        // Delete the current picture from the storage
        File::delete(public_path('propic/' . $user->picture));
        
        // Remove the picture path from the database
        $user->picture = null;
        $user->save();
    }

        return redirect()->back()->with('status', 'Profile picture deleted successfully!');
    }
}
