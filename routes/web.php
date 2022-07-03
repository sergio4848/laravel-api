<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/merhaba', function () {
    return "merhabe API";
});


Route::get('/merhaba-json2', function () {
    return response(['message'=>"merhaba API"],200)
        ->header('Content Type','text/plain');
});

Route::get('/product/{id}/{type?}', function ($id,$r_type='test') {
    return "Product Id: $id Type: $r_type";
});
