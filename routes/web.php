<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Route::post("/welcome/{name}",[UserController::class,'userview']);

Route::get('/views', function () {
    return view('view');
});

//Route::get("/views","view");

//Route::get('/{name}', function ($name) {
//    return view('welcome',['name'=> $name]);
//});

