<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use App\Repositories\ProdutoRepository;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    protected $produtoRepository;

    public function __construct(ProdutoRepository $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }

    public function index()
    {
        $produtos = $this->produtoRepository->all();
        return view('pages.produtos.index')->with('produtos', $produtos);
    }

    public function createProduto()
    {
        $categorias = Categoria::where('status', 1)->get();
        return view('pages.produtos.create')->with('categorias', $categorias);
    }

    public function storeProduto(ProdutoRequest $request)
    {
        $produto = $this->produtoRepository->create($request);
        return to_route('produto.index')->with("mensagemSucesso", "Produto: $produto->nome criado com sucesso!");
    }

    public function editProduto($id)
    {
        $produto = $this->produtoRepository->find($id);

        $categorias = Categoria::where('status', 1)->get();
        if (empty($produto)) {
            return to_route('produto.index')->with('mensagemAlerta', "Produto não encontrado");
        }

        return view('pages.produtos.edit')->with('produto', $produto)->with('categorias', $categorias);
    }

    public function saveEditProduto(ProdutoRequest $request, $id)
    {
        $produto = $this->produtoRepository->find($id);

        if (empty($produto)) {
            return to_route('produto.index')->with('mensagemAlerta', "Produto não encontrado");
        }

        $produto->fill($request->all());
        $produto->save();

        return to_route('produto.index')->with("mensagemSucesso", "Produto: $produto->nome alterado com sucesso!");
    }

    public function deleteProduto($id)
    {
        $produto = $this->produtoRepository->find($id);

        if (empty($produto)) {
            return to_route('produto.index')->with('mensagemAlerta', "Produto não encontrado");
        }

        $produto->delete();
        return to_route('produto.index')->with('mensagemSucesso', "Produto deletado com sucesso!");
    }
}
