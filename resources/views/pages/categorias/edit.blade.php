<x-app title="Categorias">
    <div class="flex items-center gap-6">
        <x-common.head-title titulo="Criar categoria" descricao="Use esta pagina para criar suas categorias" />
    </div>

    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6 mt-4 lg:w-2/4">
        <form action="{{ route('categoria.save', $categoria->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="grid gap-4 text-sm grid-cols-1">
                <div class="lg:col-span-1">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                        <div class="md:col-span-5">
                            <label for="nome_categoria">Nome da categoria</label>
                            <input type="text" name="nome_categoria" id="nome_categoria"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                value="{{ $categoria->nome_categoria }}" />
                        </div>

                        <div class="md:col-span-5">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" id="descricao"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                value="{{ $categoria->descricao }}" />
                        </div>

                        <div class="md:col-span-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" value="{{ old('status') }}"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-md  focus:border-blue-500 focus:outline-none focus:ring">
                                <option selected value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <label for="city">Ordem</label>
                            <input type="number" name="ordem" id="ordem"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $categoria->ordem }}"
                                placeholder="Isto vai indicar ordem que deseja exibir" />
                        </div>
                        <div class="md:col-span-5 mt-2">
                            <div class="inline-flex items-end">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app>
