<x-app title="Categorias">
    @section('title-page')
        <div class="flex items-center gap-6">
            <x-common.head-title titulo="Categorias" descricao="Use esta pagina para gerenciar suas categorias" />
            <a href="{{ route('categoria.create') }}"
                class="inline-flex items-center rounded-md bg-green-700 px-2 py-2 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10">
                Criar nova categoria
            </a>
        </div>
    @endsection

    <div class="grid grid-cols-4 gap-2">
        @foreach ($categorias as $categoria)
            <x-categorias.card :categoria="$categoria" />
        @endforeach
    </div>
</x-app>
