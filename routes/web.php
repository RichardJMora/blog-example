<?php
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'PostController@index');
Route::get('/post/{id}', 'PostController@show');
Route::get('/user/{id}', 'UserController@show');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/account', 'UserController@account');
	Route::post('/account/update/{id}', 'UserController@updateAccount');
	Route::post('/password/update/{id}', 'UserController@updatePassword');
});


Route::get('enviar', ['as' => 'enviar', function () {

    $data = ['link' => 'http://styde.net'];

    \Mail::send('emails.notificacion', $data, function ($message) {

        $message->from('email@styde.net', 'Styde.Net');

        $message->to('user@example.com')->subject('Notificación');

    });

    return "Se envío el email";
}]);



