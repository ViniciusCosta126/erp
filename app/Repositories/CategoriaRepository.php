<?php

namespace App\Repositories;

use App\Models\Categoria;

class CategoriaRepository
{
    public function find($id)
    {
        return Categoria::find($id);
    }

    public function all()
    {
        return Categoria::where('status', 1)->get();
    }

    public function create($request)
    {
        $categoria = Categoria::create($request->all());
        return $categoria;
    }
}
