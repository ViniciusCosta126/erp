<?php

use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('categorias')->group(function () {
    Route::get('/index', [CategoriaController::class, 'index'])->name('categoria.index');
    Route::get('/create', [CategoriaController::class, 'createCategoria'])->name('categoria.create');
    Route::post('/store', [CategoriaController::class, 'storeCategoria'])->name('categoria.store');
    Route::delete('/destroy/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
    Route::get('/editar-categoria/{id}', [CategoriaController::class, 'editCategoria'])->name('categoria.edit');
    Route::put('/editar-categoria-save/{id}', [CategoriaController::class, 'saveCategoria'])->name('categoria.save');
});
