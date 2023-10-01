<?php

use App\Http\Controllers\Contato;
use App\Http\Controllers\Home;
use App\Http\Controllers\Produto;
use App\Http\Controllers\Produtos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Home::class, 'index']);
Route::get('/produtos', [Produtos::class, 'index']);
Route::get('/produtos/create', [Produtos::class, 'create']);
Route::get('/produtos/edit/{id}', [Produtos::class, 'edit']);
Route::get('/produtos/delete/{id}', [Produtos::class, 'destroy']);
Route::get('/produtos/{id}', [Produtos::class, 'show']);
Route::get('/contato', [Contato::class, 'index']);

Route::post('/contato', [Contato::class, 'store']);
