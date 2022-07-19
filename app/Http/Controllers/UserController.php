<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    
    function show($id){
        return "hello $id";
    }
        function index()
        {
            
            //  return DB::select('select * from users');
            $users = User::get();
            return view('noaccess',['users'=>$users]);  
           
        }
    function loadView()
    {
        $data=['sourabh','anil','ravi'];
        return view('log', ["users"=>$data]);
    }
}
