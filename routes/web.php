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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/page1', function () {

    $array = [
        "NAME" => "" ,
        "ID"   => "" ,
        "GEN"  => "" ,
        "LIKE" => ""
    ]; 

    return view('page.page1',$array);
});
Route::get('/page2', function () {
    return view('page.page2');
});
Route::get('/page3', function () {
    return view('page.page3');
});
Route::get('/page4', function () {
    return view('page.page4');
});

Route::get('/page10/{ID}', function ($id) {
    $array = [
        "ID" => $id
    ];
    return view('page.page10',$array);
});
Route::post('/page','PageController@show');

Route::get('/Form_register',function() {
    return view('page.Form_register');
});
Route::get('/Form_login',function() {
    return view('page.Form_login');
});

# select post
Route::post('/page12','Pagecontroller@show_select');