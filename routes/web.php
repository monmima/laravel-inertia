<?php

use Illuminate\Support\Facades\Route;

use Illuminate\app\Http\Controllers\NewMessageController;

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

// index page with blade
// Route::get('/', function () {
//     return view('welcome');
// });

// index page with inertia
Route::get('/', function () {
    return inertia('Index');
});

//
Route::get("/hello", function () {
    // $messages = Message::all();
    return inertia("Hello");
});

//
Route::get("/contact", function () {
    return inertia("Contact");
});

Route::get('/test', "App\Http\Controllers\NewMessageController@index");
