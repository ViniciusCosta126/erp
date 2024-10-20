<div class="col-span-4 md:col-span-4 xl:col-span-1 rounded overflow-hidden shadow-lg bg-white p-6">
    <div class="mb-4">
        <h2 class="text-xl font-bold text-[#1b4e74]">Produto: {{ $produto->nome }}</h2>
        <p class="text-gray-600">Descrição: {{ $produto->descricao }}</p>
    </div>
    <div class="mb-4">
        <p class="text-[#3a3a3a]">
            <strong>Preço de Venda:</strong>
            <span class="text-accent">{{ \App\Helpers\ProdutoHelper::formatNumberMoeda($produto->preco) }}</span>
        </p>
        <p class="text-[#3a3a3a]">
            <strong>Preço de Custo:</strong>
            <span
                class="text-[#4FA9D6]">{{ \App\Helpers\ProdutoHelper::formatNumberMoeda($produto->preco_custo) }}</span>
        </p>
    </div>
    <div class="mb-4">
        <p>
            <strong>Status:</strong>
            <span class="text-green-500">
                {{ $produto->status == 1 ? 'Disponivel' : 'Indisponivel' }}
            </span>
        </p>
        <p><strong>Estoque:</strong> {{ $produto->quantidade_estoque }} unidades</p>
        <p><strong>Estoque Mínimo:</strong> {{ $produto->quantidade_minima_estoque }} unidades</p>
    </div>
    <div class="mt-4 flex gap-2">
        <a type="button" href="{{ route('produto.edit', $produto->id) }}"
            class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-2 px-4 rounded">
            <i class="fa-regular fa-pen-to-square"></i>
        </a>

        <form method="POST" action="{{ route('produto.destroy', $produto->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                <i class="fa-regular fa-trash-can"></i>
            </button>
        </form>

    </div>
</div>
