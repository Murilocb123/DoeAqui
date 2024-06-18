<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class . '@index')->name('welcome');

Route::get('/pessoa', PessoaController::class . '@index')->name('index');
Route::get('/pessoa/create', PessoaController::class . '@createView')->name('create');
//Route::post('/pessoa', PessoaController::class . '@create')->name('create');
Route::get('/pessoa/{id}', PessoaController::class . '@findById')->name('findById');
