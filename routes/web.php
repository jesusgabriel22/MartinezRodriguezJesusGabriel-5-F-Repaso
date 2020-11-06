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

Route::get('menu', function () {
    return view('menu');
});

Route::get('VanGogh',
['uses'=>'controlador@VanGogh',
'as'=>'VanGogh']);

Route::get('VanGogh', function () {
    return view('VanGogh');
});

Route::get('davinci',
['uses'=>'controlador@davinci',
'as'=>'davinci']);

Route::get('davinci', function () {
    return view('davinci');
});

Route::get('picasso',
['uses'=>'controlador@picasso',
'as'=>'picasso']);

Route::get('picasso', function () {
    return view('picasso');
});

Route::get('claude',
['uses'=>'controlador@claude',
'as'=>'claude']);

Route::get('claude', function () {
    return view('claude');
});

Route::get('thomas',
['uses'=>'controlador@thomas',
'as'=>'thomas']);

Route::get('thomas', function () {
    return view('thomas');
});