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
    return view('b1');
});

Route::get('/contato', function ($id) {
    return view('contat',['id' => $id]);
});


Route::get('/b2', function () {
    return view('b2');
});

Route::get('/b3', function () {
    return view('b3');
});

