<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use App\Repositories\CategoriaRepository;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    protected $categoriaRepository;

    public function __construct(CategoriaRepository $categoriaRepository)
    {
        $this->categoriaRepository = $categoriaRepository;
    }
    public function index()
    {
        $categorias = $this->categoriaRepository->all();
        return view('pages.categorias.index')->with('categorias', $categorias);
    }

    public function createCategoria()
    {
        return view('pages.categorias.create');
    }

    public function storeCategoria(CategoriaRequest $request)
    {
        $categoria = $this->categoriaRepository->create($request);

        return to_route('categoria.index')->with('success', 'Categoria Criado com sucesso');
    }

    public function destroy($id)
    {
        $categoria = $this->categoriaRepository->find($id);

        if (empty($categoria)) {
            return to_route('categoria.index')->with('error', 'Categoria não encontrada');
        } else {
            $categoria->delete();
            return to_route('categoria.index')->with('success', 'Categoria deletada com sucesso');
        }
    }

    public function editCategoria($id)
    {
        $categoria = $this->categoriaRepository->find($id);
        if (empty($categoria)) {
            return to_route('categoria.index')->with('error', 'Categoria não encontrada');
        } else {
            return view('pages.categorias.edit')->with('categoria', $categoria);
        }
    }
    public function saveCategoria(CategoriaRequest $request, $id)
    {
        $categoria = $this->categoriaRepository->find($id);

        if (empty($categoria)) {
            return to_route('categoria.index')->with('error', 'Categoria não encontrada');
        } else {
            $categoria->fill($request->all());
            $categoria->save();
            return to_route('categoria.index')->with('success', 'Categoria alterada com sucesso');
        }
    }
}
