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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;

Route::get('/', 'HomeController@index');
Route::get('/register', 'AuthController@register');
Route::get('/welcome', function () {
    return abort(403);
});
Route::post('/welcome', 'AuthController@welcome');
