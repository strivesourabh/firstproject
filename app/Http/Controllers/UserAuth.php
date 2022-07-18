<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function login(Request $req){
        $data = $req->input('name');
        $req =session()->put('name',$data);
        return redirect('profile');
    }
}
