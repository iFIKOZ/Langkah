<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Laravolt\Avatar\Facade as Avatar;

class UserController extends Controller
{
    public function show() {
        $users = User::all();

        return view('admindb', ['users' => $users]);
    }

    function tambah(Request $request) {

        if ($request->has('name')) {
            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;

            $user->usertype = $request->has('admin_permission') ? 'admin' : 'user';
    
            $user->save();
           return redirect()->route('admin')->with('success', 'Data added');
        } else {
            return view('tambah');
        }
    }
    public function lihat($id)
    {
        $users = User::find($id);
        return view('lihatdata', compact('users'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('editdata', ['user' => $user]);
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->usertype = $request->has('admin_permission') ? 'admin' : 'user';
    
        $user->save(); // Use save() method to persist changes to the database
    
        return redirect()->route('admin')->with('success', 'Data Updated');
    }

    public function destroy($id): RedirectResponse
    {
        // Find the user by ID
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return redirect()->route('admin')->with('error', 'User not found');
        }

        // Delete the user
        $user->delete();

        // Redirect back to the admin page with a success message
        return redirect()->route('admin')->with('success', 'Data deleted successfully');
    }
    public function register(Request $request)
    {
    // Handle user registration logic
    // Once user is registered, generate avatar for the user

    $user = User::create($request->all());

    $avatar = Avatar::create($user->name)->toBase64();

    // Optionally, you can save the avatar URL to the user record in the database
    $user->avatar = $avatar;
    $user->save();

    // Return a response or redirect as needed
    }
    
}
