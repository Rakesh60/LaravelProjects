<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\checktemplate;

use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\userformcontroller;
use App\Http\Controllers\studentmodel;

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

// Route::get('/about', function () {
//     return view('about');
// });

// Route::view('redirect','/redirect');



// Route::get('/{name}', function ($name) {
//     return redirect("redirect",['name'=>$name]);
// });

// Route::get('/{r}', function ($name) {
//     return view("redirect",['name'=>$name]);
// });
Route::view('usrdetail','detail');
Route::get("user/{id}",[usercontroller::class,'show']);
Route::get('studentdb',[studentcontroller::class,'index']);
Route::get('studentmodeldata',[studentmodel::class,'getStudentdata']);




Route::view("login",'loginform');
Route::view("success",'success');
Route::post('login',[userformcontroller::class,'savedata']);
