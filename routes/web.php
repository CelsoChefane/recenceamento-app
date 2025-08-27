<?php

use App\Http\Controllers\cidadao\cidadaoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.admin');
});

Route::get('/cidadao/create', [cidadaoController::class, 'create'])->name('cidadao.create');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/', function () {
        return view('layouts.admin');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




});
