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
    Route::get('/cidadao/lista', [cidadaoController::class, 'index'])->name('cidadao.lista');
    Route::get('/cidadao/create', [cidadaoController::class, 'create'])->name('cidadao.create');
    Route::get('/cidadao/store', [cidadaoController::class, 'store'])->name('cidadao.store');
    Route::get('/cidadao/show/{id}', [cidadaoController::class, 'show'])->name('cidadao.show');
    Route::get('/cidadao/edit/{id}', [cidadaoController::class, 'edit'])->name('cidadao.edit');
    Route::get('/cidadao/update/{id}', [cidadaoController::class, 'update'])->name('cidadao.update');
    Route::get('/cidadao/destroy/{id}', [cidadaoController::class, 'destroy'])->name('cidadao.destroy');
    Route::get('/getCity', [cidadaoController::class, 'getCity'])->name('get_city');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
