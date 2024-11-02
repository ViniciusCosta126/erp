<?php

namespace App\Http\Controllers;

use App\Repositories\ClienteRepository;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public $clienteRepository;

    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function index()
    {
        $clientes = $this->clienteRepository->all();
        return view('pages.clientes.index')->with('clientes', $clientes);
    }

    public function criarCliente()
    {
        return view('pages.clientes.create');
    }

    public function saveCliente(Request $request)
    {
        $cliente = $this->clienteRepository->salvarCliente($request);

        if (!empty($cliente)) {
            return to_route('cliente.index')->with("mensagemSucesso", "Cliente: $cliente->nome criado com sucesso!");
        }

        return to_route('cliente.index')->with('mensagemAlerta', "Não foi possivel criar cliente.");
    }

    public function deletarCliente($id)
    {
        $cliente = $this->clienteRepository->deletarCliente($id);

        if ($cliente) {
            return to_route('cliente.index')->with("mensagemSucesso", "Cliente deletado com sucesso!");
        }

        return to_route('cliente.index')->with('mensagemAlerta', "Não foi possivel deletar cliente.");
    }

    public function editarCliente($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if ($cliente) {
            return view('pages.clientes.edit')->with('cliente', $cliente);
        }

        return to_route('cliente.index')->with('mensagemAlerta', "Não foi possivel encontrar o cliente.");
    }

    public function salvarEditarCliente(Request $request, $id)
    {
        $cliente = $this->clienteRepository->editCliente($request, $id);

        if ($cliente) {
            return to_route('cliente.index')->with("mensagemSucesso", "Cliente editado com sucesso!");
        }

        return to_route('cliente.index')->with('mensagemAlerta', "Não foi possivel encontrar o cliente.");
    }
}
