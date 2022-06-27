<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\FilmesController;
use App\Http\Controllers\DocumentariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('series')->group(function(){
    Route::get('/', [SeriesController::class, 'index'])->name('series-index');
    Route::get('/create', [SeriesController::class, 'create'])->name('series-create');  
     // vai retornar uma function Create -- a function create retorna a view series
    Route::post('/', [SeriesController::class, 'store'])->name('series-store');  
    Route::get('/{id}/edit', [SeriesController::class, 'edit'])->where('id', '[0-9]+')->name('series-edit');
    Route::put('/{id}', [SeriesController::class, 'update'])->where('id', '[0-9]+')->name('series-update');
    Route::delete('/{id}', [SeriesController::class, 'destroy'])->where('id', '[0-9]+')->name('series-destroy');
});

Route::prefix('filmes')->group(function(){
    Route::get('/', [FilmesController::class, 'index'])->name('filmes-index');
    Route::get('/create', [FilmesController::class, 'create'])->name('filmes-create');  
     // vai retornar uma function Create -- a function create retorna a view filmes
    Route::post('/', [FilmesController::class, 'store'])->name('filmes-store');  
    Route::get('/{id}/edit', [FilmesController::class, 'edit'])->where('id', '[0-9]+')->name('filmes-edit');
    Route::put('/{id}', [FilmesController::class, 'update'])->where('id', '[0-9]+')->name('filmes-update');
    Route::delete('/{id}', [FilmesController::class, 'destroy'])->where('id', '[0-9]+')->name('filmes-destroy');
});

Route::prefix('documentarios')->group(function(){
    Route::get('/', [DocumentariosController::class, 'index'])->name('documentarios-index');
    Route::get('/create', [DocumentariosController::class, 'create'])->name('documentarios-create');  
     // vai retornar uma function Create -- a function create retorna a view documentarios
    Route::post('/', [DocumentariosController::class, 'store'])->name('documentarios-store');  
    Route::get('/{id}/edit', [DocumentariosController::class, 'edit'])->where('id', '[0-9]+')->name('documentarios-edit');
    Route::put('/{id}', [DocumentariosController::class, 'update'])->where('id', '[0-9]+')->name('documentarios-update');
    Route::delete('/{id}', [DocumentariosController::class, 'destroy'])->where('id', '[0-9]+')->name('documentarios-destroy');
});

    


Route::fallback(function(){
    return "Erro ao Localiza Rota!";
});





