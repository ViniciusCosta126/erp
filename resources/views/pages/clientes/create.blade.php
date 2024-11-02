<x-app title="Clientes - Criar">
    @section('title-page')
        <div class="flex items-center gap-6">
            <x-common.head-title titulo="Clientes" descricao="Use esta pagina para criar um novo cliente" />
        </div>
    @endsection

    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6 mt-4 lg:w-2/4">
        <form action="{{ route('cliente.save-cliente') }}" method="POST">
            @csrf
            <div class="grid gap-4 text-sm grid-cols-1">
                <div class="lg:col-span-1">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                        <div class="md:col-span-6">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('nome') }}" />
                        </div>

                        <div class="md:col-span-6">
                            <label for="Email">Email</label>
                            <input type="text" name="email" id="email"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" type="email"
                                value="{{ old('email') }}" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('telefone') }}"
                                step="0.01" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="endereco">Endereco</label>
                            <input type="text" name="endereco" id="endereco"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('endereco') }}"
                                step="0.01" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade"
                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('cidade') }}" />
                        </div>
                        <div class="md:col-span-3">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" value="{{ old('estado') }}"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-md  focus:border-blue-500 focus:outline-none focus:ring">
                                <option disabled selected>Selecione um estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
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
