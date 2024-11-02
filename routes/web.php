<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
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


Route::prefix('produtos')->group(function () {
    Route::get('/index', [ProdutoController::class, 'index'])->name('produto.index');
    Route::get('/create', [ProdutoController::class, 'createProduto'])->name('produto.create');
    Route::post('/store', [ProdutoController::class, 'storeProduto'])->name('produto.store');
    Route::get('/editar-produto/{id}', [ProdutoController::class, 'editProduto'])->name('produto.edit');
    Route::put('/editar-produto-save/{id}', [ProdutoController::class, 'saveEditProduto'])->name('produto.save');
    Route::delete('/destroy/{id}', [ProdutoController::class, 'deleteProduto'])->name('produto.destroy');
});


Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/criar-cliente', [ClienteController::class, 'criarCliente'])->name('cliente.criar-cliente');
    Route::post('/save-criar-cliente', [ClienteController::class, 'saveCliente'])->name('cliente.save-cliente');
    Route::get('/editar-cliente/{id}', [ClienteController::class, 'editarCliente'])->name('cliente.editar-cliente');
    Route::delete('/deletar-cliente/{id}', [ClienteController::class, 'deletarCliente'])->name('cliente.deletar-cliente');
    Route::put('/salvar-editar-cliente/{id}', [ClienteController::class, 'salvarEditarCliente'])->name('cliente.salvar-editar-cliente');
});
