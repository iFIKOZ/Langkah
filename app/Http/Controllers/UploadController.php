<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\koment;
use App\Models\upload;
use App\Models\forum;
use App\Models\komenta;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /* Index */
    public function index()
    {
        return view('upload');
    }

    /* upload */

    public function store(Request $request)
    {
        $uplod = new upload;
        $uplod->title = $request->title;
        $uplod->author = Auth::user()->name;

        $image = $request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage',$imagename);

            $uplod->image=$imagename;
        }

        $uplod->tool = $request->tool;
        $uplod->description = $request->description;
        $uplod->step = $request->step;
        $uplod->save();
        return redirect('upload')->with('status', 'Post Has Been Uploaded');
    }

    /* See All */

    public function view()
    {
        $explores = upload::paginate(12);
        return view('explore', compact('explores'));
    }
    
    public function showw()
    {
        $posts = upload::paginate(5);

        return view('content', ['post' => $posts]);
    }

    public function details($id)
    {
        $stepa = upload::find($id);
        $randomUploads = Upload::inRandomOrder()->take(3)->get();
        $comments = komenta::where('post_id', $id)
        ->with('user') // Eager load the associated user
        ->get();

        return view('step',compact('stepa','comments','randomUploads'));
    }


    /* See In Home */

    public function viewrc()
    {
        return Upload::latest()->paginate(4);
    }
    
    public function viewhm()
    {
        return Upload::paginate(4);
    }

    public function lihat($id)
    {
        $user = Upload::find($id);
        return view('lihatkn', compact('user'));
    }
    
    public function edit($id)
    {
        $user = Upload::find($id);
        return view('editkn', compact('user'));
    }    

    public function update(Request $request, $id)
    {
        $user = Upload::find($id);
        $user->title = $request->title;
        $user->author = $request->author;
        $user->description = $request->description;
        $user->tool = $request->tool;
        $user->step = $request->step;
        $user->save();
    
        return redirect(url('content'))->with('success', 'Data Updated');
    }

    public function destroy($id): RedirectResponse
    {
        $user = Upload::find($id);

        if (!$user) {
            return redirect()->route('admin')->with('error', 'User not found');
        }
        $user->delete();

        // Redirect back to the admin page with a success message
        return redirect(url('content'))->with('success', 'Data deleted successfully');
    }
    
}
