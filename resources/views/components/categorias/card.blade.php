<div
    class="relative col-span-4 md:col-span-2 lg:col-span-1 flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl ">
    <div class="p-6">
        <h5
            class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            {{ $categoria->nome_categoria }}
        </h5>
        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
            {{ $categoria->descricao }}
        </p>
    </div>
    <div class="p-6 pt-0 flex gap-2 justify-end">

        <a href="{{ route('categoria.edit', $categoria->id) }}"
            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-amber-400 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:bg-amber-600 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
            type="button">
            <i class="fa-regular fa-pen-to-square"></i>
        </a>
        <form action="{{ route('categoria.destroy', $categoria->id) }}" method="post">
            @csrf
            @method('delete')
            <button
                class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-rose-700 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:bg-rose-900 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                type="submit">
                <i class="fa-regular fa-trash-can"></i>
            </button>
        </form>

    </div>
</div>
