<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Upload extends Controller
{
    //
    function index(Request $req)
    {
        // return $req->file('file')->store('img');

        $imageName = time().'.'.$req->file->extension(); 
        $req->file->move(public_path('file'), $imageName);
        $imagePath = public_path('upload/'.$imageName);
        return $imageName;
    }
}
