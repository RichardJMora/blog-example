<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\User;

//
Route::get('/users', function (Request $request) {
    $users = User::all();
    return response()->json($users);   
});

Route::get('/posts', 'PostController@index');