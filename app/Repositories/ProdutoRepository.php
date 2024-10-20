<?php

namespace App\Repositories;

use App\Models\Produto;

class ProdutoRepository
{
    public function find($id)
    {
        return Produto::find($id);
    }

    public function all()
    {
        return Produto::where('status', 1)->get();
    }

    public function create($request)
    {
        $produto = Produto::create($request->all());
        return $produto;
    }
}
