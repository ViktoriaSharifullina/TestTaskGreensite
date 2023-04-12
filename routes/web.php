<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home/submit', [CustomerController::class, 'create']);
Route::post('/home/submit', [CustomerController::class, 'myformPost'])->name('customer-form');


