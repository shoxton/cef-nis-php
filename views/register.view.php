<?php require 'views/partials/head.php'; ?>


<main class="mx-auto container py-10">

    <form method="POST">
        <div class="space-y-12">

            <div class="border-gray-900/10 pb-12">
                <h2 class="text-2xl font-semibold leading-7 text-gray-900">Novo cadastro</h2>
                <p class="mt-1 text-base leading-6 text-gray-600">Cadastrar um novo Número de Identificação Social</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nome
                            completo</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
        </div>
    </form>

</main>

<?php require 'views/partials/footer.php'; ?>
