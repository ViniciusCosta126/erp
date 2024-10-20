<x-app title="Produtos">
    @section('title-page')
        <div class="flex items-center gap-6">
            <x-common.head-title titulo="Editar produto" descricao="Use esta pagina para editar os Produtos" />
        </div>
    @endsection
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6 mt-4 lg:w-2/4">
        <form action="{{ route('produto.save', $produto->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="grid gap-4 text-sm grid-cols-1">
                <div class="lg:col-span-1">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                        <div class="md:col-span-6">
                            <label for="nome">Nome do Produto</label>
                            <input type="text" name="nome" id="nome"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $produto->nome }}" />
                        </div>

                        <div class="md:col-span-6">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" id="descricao"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                value="{{ $produto->descricao }}" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="preco">Preco</label>
                            <input type="number" name="preco" id="preco"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $produto->preco }}"
                                placeholder="Preço de venda do produto" step="0.01" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="preco_custo">Preço de Custo</label>
                            <input type="number" name="preco_custo" id="preco_custo"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                value="{{ $produto->preco_custo }}" placeholder="Preço de custo do produto"
                                step="0.01" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="quantidade_estoque">Quantiade em estoque</label>
                            <input type="number" name="quantidade_estoque" id="quantidade_estoque"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                value="{{ $produto->quantidade_estoque }}" placeholder="Preço de custo do produto" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="quantidade_minima_estoque">Quantidade minima do estoque</label>
                            <input type="number" name="quantidade_minima_estoque" id="quantidade_minima_estoque"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                value="{{ $produto->quantidade_minima_estoque }}"
                                placeholder="Preço de custo do produto" />
                        </div>


                        <div class="md:col-span-6">
                            <label for="status">Status</label>
                            <select name="status" id="status" value="{{ old('status') }}"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-md  focus:border-blue-500 focus:outline-none focus:ring">
                                <option {{ $produto->status == 1 ? 'selected' : '' }} value="1">Ativo</option>
                                <option {{ $produto->status == 0 ? 'selected' : '' }} value="0">Inativo</option>
                            </select>
                        </div>

                        <div class="md:col-span-6">
                            <label for="categoria_id">Categoria</label>
                            <select name="categoria_id" id="categoria_id" value="{{ old('categoria_id') }}"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-md  focus:border-blue-500 focus:outline-none focus:ring">
                                @foreach ($categorias as $categoria)
                                    <option {{ $produto->categoria_id == $categoria->id ? 'selected' : '' }}
                                        value="{{ $categoria->id }}">{{ $categoria->nome_categoria }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="md:col-span-5 mt-2">
                            <div class="inline-flex items-end">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app>
