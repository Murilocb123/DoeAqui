<?php

use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\DoacaoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::GET('/', HomeController::class . '@index')->name('welcome');

/*------------------ Pessoa ------------------*/
Route::GET('/pessoa', PessoaController::class . '@index')->name('pessoa-index');
Route::GET('/pessoa/create', PessoaController::class . '@createView')->name('pessoa-create-view');
Route::GET('/pessoa/edit/{id}', PessoaController::class . '@editView')->name('pessoa-edit-view');
Route::GET('/pessoa/preview/{id}', PessoaController::class . '@previewView')->name('pessoa-preview');

Route::POST('/pessoa/create', PessoaController::class . '@create')->name('pessoa-create');
Route::PUT('/pessoa/edit/{id}', PessoaController::class . '@update')->name('pessoa-update');
//TODO: mudar par delete
Route::GET('/pessoa/delete/{id}', PessoaController::class . '@delete')->name('pessoa-delete');

/*------------------ Doacao ------------------*/
//Route::post('/pessoa', PessoaController::class . '@create')->name('create');
//Route::get('/pessoa/{id}', PessoaController::class . '@findById')->name('findById');
Route::get('/doacao', DoacaoController::class . '@index')->name('doacao-index');
Route::get('/doacao/create', DoacaoController::class . '@createView')->name('doacao-create-view');
Route::get('/doacao/edit/{id}', DoacaoController::class . '@editView')->name('doacao-edit-view');
Route::POST('/doacao/create', DoacaoController::class . '@create')->name('doacao-create');
Route::PUT('/doacao/edit/{id}', DoacaoController::class . '@update')->name('doacao-update');

/*------------------ Endereco ------------------*/
Route::get('/endereco', EnderecoController::class . '@index')->name('endereco-index');
Route::get('/endereco/create', EnderecoController::class . '@createView')->name('endereco-create-view');
Route::get('/endereco/edit/{id}', EnderecoController::class . '@editView')->name('endereco-edit-view');
Route::POST('/endereco/create', EnderecoController::class . '@create')->name('endereco-create');
Route::PUT('/endereco/edit/{id}', EnderecoController::class . '@update')->name('endereco-update');