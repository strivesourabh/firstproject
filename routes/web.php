<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\Upload;
use App\Http\Controllers\ImageUploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('about','/about');
Route::view('contact','/contact');
// Route::redirect('/about', '/contact'); 
Route::get('/contact/{name?}', function ($name = 15) {
    return $name+35;
});


Route::get('contact/{id}', [App\Http\Controllers\UserController::class, 'show']);

Route::view('users','/users');


Route::get('log', [App\Http\Controllers\UserController::class, 'loadView']);


// route::post('form', [App\Http\Controllers\FormController::class, 'getData']);
route::view('form', 'form');
route::get('noaccess',[UserController::class,'index']);

route::view('store','storeuser');
route::post('storecontroller',[StoreController::class, 'storeM']);

// route::view('login','login');
route::view('profile','profile');

route::get('/logout',function(){
    if(session()->has('name')){
        session()->pull('name',null);
    }
    return redirect('login');
});

route::get('login',function(){
    if(session()->has('name')){
        return redirect('profile');
    }
    return view('login');
});


route::post('users',[UserAuth::class,'login']);



// Upload File

//  Route::view('upload','upload');
// Route::POST('upload', [Upload::class, 'index']);


Route::get('image', [ImageUploadController::class, 'index']);
Route::post('upload', [ImageUploadController::class, 'upload']);