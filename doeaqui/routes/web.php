<?php

use App\Http\Controllers\PessoaController;
use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/pessoa', PessoaController::class . '@findAll')->name('findAll');
Route::post('/pessoa', PessoaController::class . '@create')->name('create');
Route::get('/pessoa/{id}', PessoaController::class . '@findById')->name('findById');
