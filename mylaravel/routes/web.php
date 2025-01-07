<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return "<h1> my view </h1>";
});

Route::get('/mycontroller/{id?}', 
[Mycontroller :: class , 'myfunction']);

Route::post('/mycontroller/{id?}', 
[Mycontroller :: class , 'myfunction']);
