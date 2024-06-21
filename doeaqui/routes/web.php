<?php

use App\Http\Controllers\DoacaoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class . '@index')->name('welcome');

/*------------------ Pessoa ------------------*/
Route::get('/pessoa', PessoaController::class . '@index')->name('pessoa-index');
Route::get('/pessoa/create', PessoaController::class . '@createView')->name('pessoa-create-view');
Route::get('/pessoa/edit/{id}', PessoaController::class . '@editView')->name('pessoa-edit-view');
Route::POST('/pessoa/create', PessoaController::class . '@create')->name('pessoa-create');
Route::PUT('/pessoa/edit/{id}', PessoaController::class . '@update')->name('pessoa-update');

/*------------------ Doacao ------------------*/
//Route::post('/pessoa', PessoaController::class . '@create')->name('create');
//Route::get('/pessoa/{id}', PessoaController::class . '@findById')->name('findById');
Route::get('/doacao', DoacaoController::class . '@index')->name('doacao-index');
Route::get('/doacao/create', DoacaoController::class . '@createView')->name('doacao-create-view');
Route::get('/doacao/edit/{id}', DoacaoController::class . '@editView')->name('doacao-edit-view');
Route::POST('/doacao/create', DoacaoController::class . '@create')->name('doacao-create');
Route::PUT('/doacao/edit/{id}', DoacaoController::class . '@update')->name('doacao-update');