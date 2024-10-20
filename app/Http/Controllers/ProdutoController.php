<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::where('status', 1)->get();
        return view('pages.produtos.index')->with('produtos', $produtos);
    }

    public function createProduto()
    {
        $categorias = Categoria::where('status', 1)->get();
        return view('pages.produtos.create')->with('categorias', $categorias);
    }

    public function storeProduto(Request $request)
    {
        $produto = Produto::create($request->all());
        return to_route('produto.index');
    }

    public function editProduto($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::where('status', 1)->get();
        if (empty($produto)) {
            return to_route('produto.index')->with('error', "Produto não encontrado");
        }

        return view('pages.produtos.edit')->with('produto', $produto)->with('categorias', $categorias);
    }

    public function saveEditProduto(Request $request, $id)
    {
        $produto = Produto::where('id', $id)->first();
        $produto->fill($request->all());
        $produto->save();

        return to_route('produto.index');
    }

    public function deleteProduto($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return to_route('produto.index');
    }
}
