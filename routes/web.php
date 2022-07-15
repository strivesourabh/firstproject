<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


route::post('form', [App\Http\Controllers\FormController::class, 'getData']);
route::view('form', 'form');