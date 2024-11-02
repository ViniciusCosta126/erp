<x-app title="Clientes - Editar">
    @section('title-page')
        <div class="flex items-center gap-6">
            <x-common.head-title titulo="Clientes" descricao="Use esta pagina para editar um cliente" />
        </div>
    @endsection

    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6 mt-4 lg:w-2/4">
        <form action="{{ route('cliente.salvar-editar-cliente', $cliente->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="grid gap-4 text-sm grid-cols-1">
                <div class="lg:col-span-1">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                        <div class="md:col-span-6">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $cliente->nome }}" />
                        </div>

                        <div class="md:col-span-6">
                            <label for="Email">Email</label>
                            <input type="text" name="email" id="email"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" type="email"
                                value="{{ $cliente->email }}" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $cliente->telefone }}"
                                step="0.01" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="endereco">Endereco</label>
                            <input type="text" name="endereco" id="endereco"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $cliente->endereco }}"
                                step="0.01" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                value="{{ $cliente->cidade }}" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                <option disabled selected>Selecione um estado</option>
                                <option value="AC" {{ $cliente->estado == 'AC' ? 'selected' : '' }}>Acre</option>
                                <option value="AL" {{ $cliente->estado == 'AL' ? 'selected' : '' }}>Alagoas</option>
                                <option value="AP" {{ $cliente->estado == 'AP' ? 'selected' : '' }}>Amapá</option>
                                <option value="AM" {{ $cliente->estado == 'AM' ? 'selected' : '' }}>Amazonas
                                </option>
                                <option value="BA" {{ $cliente->estado == 'BA' ? 'selected' : '' }}>Bahia</option>
                                <option value="CE" {{ $cliente->estado == 'CE' ? 'selected' : '' }}>Ceará</option>
                                <option value="DF" {{ $cliente->estado == 'DF' ? 'selected' : '' }}>Distrito
                                    Federal</option>
                                <option value="ES" {{ $cliente->estado == 'ES' ? 'selected' : '' }}>Espírito Santo
                                </option>
                                <option value="GO" {{ $cliente->estado == 'GO' ? 'selected' : '' }}>Goiás</option>
                                <option value="MA" {{ $cliente->estado == 'MA' ? 'selected' : '' }}>Maranhão
                                </option>
                                <option value="MT" {{ $cliente->estado == 'MT' ? 'selected' : '' }}>Mato Grosso
                                </option>
                                <option value="MS" {{ $cliente->estado == 'MS' ? 'selected' : '' }}>Mato Grosso do
                                    Sul</option>
                                <option value="MG" {{ $cliente->estado == 'MG' ? 'selected' : '' }}>Minas Gerais
                                </option>
                                <option value="PA" {{ $cliente->estado == 'PA' ? 'selected' : '' }}>Pará</option>
                                <option value="PB" {{ $cliente->estado == 'PB' ? 'selected' : '' }}>Paraíba
                                </option>
                                <option value="PR" {{ $cliente->estado == 'PR' ? 'selected' : '' }}>Paraná</option>
                                <option value="PE" {{ $cliente->estado == 'PE' ? 'selected' : '' }}>Pernambuco
                                </option>
                                <option value="PI" {{ $cliente->estado == 'PI' ? 'selected' : '' }}>Piauí</option>
                                <option value="RJ" {{ $cliente->estado == 'RJ' ? 'selected' : '' }}>Rio de Janeiro
                                </option>
                                <option value="RN" {{ $cliente->estado == 'RN' ? 'selected' : '' }}>Rio Grande do
                                    Norte</option>
                                <option value="RS" {{ $cliente->estado == 'RS' ? 'selected' : '' }}>Rio Grande do
                                    Sul</option>
                                <option value="RO" {{ $cliente->estado == 'RO' ? 'selected' : '' }}>Rondônia
                                </option>
                                <option value="RR" {{ $cliente->estado == 'RR' ? 'selected' : '' }}>Roraima
                                </option>
                                <option value="SC" {{ $cliente->estado == 'SC' ? 'selected' : '' }}>Santa Catarina
                                </option>
                                <option value="SP" {{ $cliente->estado == 'SP' ? 'selected' : '' }}>São Paulo
                                </option>
                                <option value="SE" {{ $cliente->estado == 'SE' ? 'selected' : '' }}>Sergipe
                                </option>
                                <option value="TO" {{ $cliente->estado == 'TO' ? 'selected' : '' }}>Tocantins
                                </option>
                            </select>

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
