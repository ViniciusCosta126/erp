<?php

namespace App\Repositories;

use App\Models\Cliente;
use GuzzleHttp\Client;

class ClienteRepository
{
    public function find($id)
    {
        return Cliente::find($id);
    }

    public function all()
    {
        return Cliente::all();
    }

    public function salvarCliente($request)
    {
        return Cliente::create($request->all());
    }

    public function deletarCliente($id)
    {
        $cliente = $this->find($id);

        if (!empty($cliente)) {
            $cliente->delete();
            return true;
        }

        return false;
    }

    public function editCliente($request, $id)
    {
        $cliente = $this->find($id);
        if (!empty($cliente)) {
            $cliente->fill($request->all());
            $cliente->save();
            return $cliente;
        }

        return false;
    }
}
