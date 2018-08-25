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

Route::get('/home', function () {
    return "Hello world!!!";
});

Route::get('/members', function () {
    return "Members!!!";
});

Route::get('/members/{id}/{name}', function ($id,$name) {
    return "BoBo Tangina mo = ".$name." , ".$id;
})->where('id','[0-9]+');