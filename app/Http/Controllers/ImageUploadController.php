<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Image;
 
class ImageUploadController extends Controller
{
     public function index()
    {
        return view('image-upload');
    }
 
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
 
        ]);
 
        $name = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->store('public/images');
 
 
        $save = new Image();
 
        $save->name = $name;
        $save->path = $path;
 
        return redirect('image-upload')->with('status', 'Image Has been uploaded successfully in laravel');
 
    }
}
