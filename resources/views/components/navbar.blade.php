<nav class="bg-blue-500 p-4 flex items-center justify-between">
    <div>
        <h1 class="text-white text-xl font-semibold">SALUD 360</h1>
    </div>
    <div class="flex items-center space-x-4">
        <span class="text-white">Bem vindo</span>
        <i class="fa-regular fa-circle-user text-white text-2xl"></i>
    </div>
</nav>
<aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
    <nav>
        <ul class="space-y-2">
            <li class="opcion-con-desplegable">
                <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Pedidos</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs"></i>
                </div>
                <ul class="desplegable ml-4 hidden">
                    <li>
                        <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                            <i class="fa-solid fa-chevron-right mr-2 text-xs"></i>
                            Teste
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                            <i class="fa-solid fa-chevron-right mr-2 text-xs"></i>
                            Teste
                        </a>
                    </li>
                </ul>
            </li>
            <li class="opcion-con-desplegable">
                <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                    <div class="flex items-center">
                        <i class="fas fa-money-bill-wave mr-2"></i>
                        <span>Contabilidade</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs"></i>
                </div>
                <ul class="desplegable ml-4 hidden">
                    <li>
                        <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                            <i class="fa-solid fa-chevron-right mr-2 text-xs"></i>
                            Tratamentos
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                            <i class="fa-solid fa-chevron-right mr-2 text-xs"></i>
                            Gastos
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                            <i class="fa-solid fa-chevron-right mr-2 text-xs"></i>
                            Faturas
                        </a>
                    </li>
                </ul>
            </li>
            <li class="opcion-con-desplegable">
                <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                    <div class="flex items-center">
                        <i class="fas fa-file-alt mr-2"></i>
                        <span>Estoque</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs"></i>
                </div>
                <ul class="desplegable ml-4 hidden">
                    <li>
                        <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                            <i class="fa-solid fa-chevron-right mr-2 text-xs"></i>
                            Novo Produto
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");
        opcionesConDesplegable.forEach(function(opcion) {
            opcion.addEventListener("click", function() {
                const desplegable = opcion.querySelector(".desplegable");

                desplegable.classList.toggle("hidden");
            });
        });
    });
</script>
