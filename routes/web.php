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
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    if(session('managerName'))
        return view('welcome');
    else
        return view('login');
});
Route::get('/login','Auth\LoginController@index');
Route::post('/checkLogin','Auth\LoginController@checkLogin');
Route::get('/LoginOut','Auth\LoginController@LoginOut');
Route::get('/artical','Auth\ArticalController@index');
Route::get('/cache', function () {
    //var_dump(Cache::class);
    //Session::put('myName','lijun');
    //Session::put(['myName'=>'lijun']);
    return view('downLoad');
});
