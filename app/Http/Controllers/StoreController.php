<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    function storeM(Request $req)
    {
        $data = $req->input('name');
        $req->session()->flash('name',$data);
        return redirect('store');
    }
}
