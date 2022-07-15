<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function show($id){
    //     return "hello $id";
    // }

    function loadView()
    {
        $data=['sourabh','anil','ravi'];
        return view('log', ["users"=>$data]);
    }
}
