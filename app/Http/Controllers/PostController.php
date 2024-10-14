<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\koment;
use App\Models\upload;
use App\Models\forum;
use App\Models\komenta;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('ask');
    }

    public function store(Request $request)
    {
        $forum = new forum;
        $forum->title = $request->title;
        $forum->author = Auth::user()->name;
        $forum->description = $request->description;
        $forum->save();
        return redirect('forum')->with('status', 'Post Has Been Uploaded');
    }

    public function view()
    {
        $forums = forum::paginate(8);
        return view('forum',compact('forums'));
    }

    public function details($id)
    {
        $detail = forum::find($id);
        $comments = koment::where('post_id', $id)
        ->with('user') // Eager load the associated user
        ->get();

        return view('detail',compact('detail','comments'));
    }

    /* admin */
    public function show()
    {
        $posts = forum::paginate(5);

        return view('forumdb', ['post' => $posts]);
    }

    public function lihat($id)
    {
        $user = forum::find($id);
        return view('lihatfr', compact('user'));
    }
    
    public function edit($id)
    {
        $user = forum::find($id);
        return view('editfr', compact('user'));
    }    

    public function update(Request $request, $id)
    {
        $user = forum::find($id);
        $user->title = $request->title;
        $user->author = $request->author;
        $user->description = $request->description;
        $user->save();
    
        return redirect(url('forumdb'))->with('success', 'Data Updated');
    }

    public function destroy($id): RedirectResponse
    {
        $user = forum::find($id);

        if (!$user) {
            return redirect()->route('admin')->with('error', 'User not found');
        }
        $user->delete();

        // Redirect back to the admin page with a success message
        return redirect(url('forumdb'))->with('success', 'Data deleted successfully');
    }
}
