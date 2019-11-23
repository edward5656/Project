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
/*
Route::get('/welcome', function () {
    return view('welcome');
});

route::get("/user/{id?}", function($id="no data"){
    return view('user',["user"=>$id]);
});

route::redirect("/here","/welcome");
*/

route::get('/', function (){
    return view('welcome');
});
route::view('users','users');
route::get("/youtube","youtube@index");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
