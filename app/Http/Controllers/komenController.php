<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\koment;
use App\Models\komenta;
use App\Models\upload;
use App\Models\forum;

class komenController extends Controller
{
    function store1(Request $request,$slug,$id){
        $request->validate([
            'komen'=>'required'
        ]);
        $data=new koment;
        $data->user_id=$request->user()->id;
        $data->post_id=$id;
        $data->komen=$request->komen;
        $data->save();
        return redirect()->back()->with('status', 'Comment Added');
    }

    function store2(Request $request,$slug,$id){
        $request->validate([
            'komen'=>'required'
        ]);
        $data=new komenta;
        $data->user_id=$request->user()->id;
        $data->post_id=$id;
        $data->komen=$request->komen;
        $data->save();
        return redirect()->back()->with('status', 'Comment Added');
    }
}
