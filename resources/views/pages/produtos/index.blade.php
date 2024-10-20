<x-app title="Produtos">
    @section('title-page')
        <div class="flex items-center gap-6">
            <x-common.head-title titulo="Produtos" descricao="Use esta pagina para gerenciar seus Produtos" />
            <a href="{{ route('produto.create') }}"
                class="inline-flex items-center rounded-md bg-green-700 px-2 py-2 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10">
                Criar novo produto.
            </a>
        </div>
    @endsection

    <div class="grid grid-cols-4 gap-2">
        @foreach ($produtos as $produto)
            <x-produtos.card :produto="$produto" />
        @endforeach
    </div>
</x-app>
