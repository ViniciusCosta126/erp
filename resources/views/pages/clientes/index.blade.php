<x-app title="Clientes">
    @section('title-page')
        <div class="flex items-center gap-6">
            <x-common.head-title titulo="Clientes" descricao="Use esta pagina para gerenciar seus clientes" />
            <a href="{{ route('cliente.criar-cliente') }}"
                class="inline-flex items-center rounded-md bg-green-700 px-2 py-2 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10">
                Criar novo Cliente
            </a>
        </div>
    @endsection

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-accent text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                        Telefone
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                        Endereço
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                        Cidade
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($clientes as $cliente)
                    <tr class="hover:bg-gray-100 transition duration-150 ease-in-out">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $cliente->nome }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $cliente->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $cliente->telefone }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $cliente->endereco }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $cliente->cidade }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $cliente->estado }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex gap-x-2">
                            <a href="{{ route('cliente.editar-cliente', $cliente->id) }}"
                                class="font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-amber-400 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:bg-amber-600 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <form action="{{ route('cliente.deletar-cliente', $cliente->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-rose-700 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:bg-rose-900 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"><i
                                        class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app>
