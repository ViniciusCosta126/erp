<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::where('status', 1)->get();
        return view('pages.categorias.index')->with('categorias', $categorias);
    }

    public function createCategoria()
    {
        return view('pages.categorias.create');
    }

    public function storeCategoria(Request $request)
    {
        $categoria = Categoria::create($request->all());

        return to_route('categoria.index')->with('success', 'Categoria Criado com sucesso');
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if (empty($categoria)) {
            return to_route('categoria.index')->with('error', 'Categoria não encontrada');
        } else {
            $categoria->delete();
            return to_route('categoria.index')->with('success', 'Categoria deletada com sucesso');
        }
    }

    public function editCategoria($id)
    {
        $categoria = Categoria::find($id);
        if (empty($categoria)) {
            return to_route('categoria.index')->with('error', 'Categoria não encontrada');
        } else {
            return view('pages.categorias.edit')->with('categoria', $categoria);
        }
    }
    public function saveCategoria(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        if (empty($categoria)) {
            return to_route('categoria.index')->with('error', 'Categoria não encontrada');
        } else {
            $categoria->fill($request->all());
            $categoria->save();
            return to_route('categoria.index')->with('success', 'Categoria alterada com sucesso');
        }
    }
}
