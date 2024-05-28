<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\koment;
use App\Models\upload;
use App\Models\forum;
use App\Models\komenta;
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
        $forums = forum::paginate(6);
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
}
