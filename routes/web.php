<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cidadao\cidadaoController;



Auth::routes();
Route::middleware(['web','auth'
])->group(function () {


    Route::get('/', function () {
        return view('layouts.admin');
    });
    Route::get('/cidadao/create', [cidadaoController::class, 'create'])->name('cidadao.create');
    Route::get('/cidadao/store', [cidadaoController::class, 'store'])->name('cidadao.store');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
