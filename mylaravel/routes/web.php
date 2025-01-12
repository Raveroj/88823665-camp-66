<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

Route::get('/mycontroller/{id?}', [Mycontroller::class, 'myfunction']);
Route::post('/mycontroller/{id?}', [Mycontroller::class, 'myfunction']);
