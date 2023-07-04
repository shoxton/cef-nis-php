<?php require 'views/partials/head.php'; ?>


<main class="p-3 mx-auto container py-10">

    <div class="grid grid-cols-2">
        <div class="">

            <div class="border-gray-900/10 pb-12">
                <h2 class="text-2xl font-semibold leading-7 text-gray-900">Novo cadastro</h2>
                <p class="mt-1 text-base leading-6 text-gray-600">Cadastrar um novo Número de Identificação Social</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 ">
                    <form id="register_form" method="POST">
                        <div class="sm:col-span-3">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nome
                                completo</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" autocomplete="given-name"
                                    placeholder="Digite seu nome"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                            <?php if(!empty($errors)) : ?>
                            <div class="text-sm text-red-500 mt-3">
                                <?= implode(', ', $errors) ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-6 flex items-center gap-x-6">
                <button form="register_form" type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Criar
                    cadastro</button>
            </div>

        </div>
        <?php if (!is_null($beneficiary)) : ?>
        <div>
            <p class="text-lg bg-gradient-to-r from-white to-green-100 bg-green-100 p-3 text-end">
                Cadastro criado com sucesso.
            </p>
            <div
                class="p-10 rounded bg-gradient-to-r from-white to-blue-100 space-y-5 text-end flex flex-col justify-between">
                <div>
                    <span class="text-sm tracking-wide text-blue-900">Nome</span>
                    <h2 class="text-3xl"><?= $beneficiary->name ?></h2>
                </div>
                <div>
                    <span class="text-sm tracking-wide text-blue-900">NIS (Número de Identificação Social)</span>
                    <p class="text-xl tracking-wider font-mono"><?= $beneficiary->nis ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>


</main>

<?php require 'views/partials/footer.php'; ?>
