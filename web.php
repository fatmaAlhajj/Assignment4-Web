<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidContrller;

Route::get('/abc',[ValidContrller::class,'create'])->name('create');
Route::post('/abcd',[ValidContrller::class,'store'])->name('validate.store');

