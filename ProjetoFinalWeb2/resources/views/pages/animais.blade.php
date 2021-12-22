<x-app-layout>
    <script src="{{asset('js/custom.js')}}"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel Animais') }}
        </h2>
    </x-slot>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="py-12">
    <div class="flex justify-center py-12">
        <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex space-x-3 m-4 text-sm font-medium justify-center">
                <form method="POST" action="{{ route('animais.store') }}">
                    @csrf

                    <div>
                        <div class="flex">
                            <div class="mr-4">
                                <x-label for="name" :value="__('Codigo')" />
                                <x-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" readonly/>
                            </div>
                            <div class="mr-4">
                                <x-label for="name" :value="__('Nome')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                            </div>
                            <div class="mr-4">
                                <x-label for="name" :value="__('Classe')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="classe" required autofocus />
                            </div>

                            <div class="mr-4">
                                <x-label for="uf" :value="__('UF')" />
                                <x-select id="uf" class="block mt-1 w-full" name="uf" required :options="['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO']" />
                            </div>

                            <div class="mr-4">
                                <x-label for="dataNascimento" :value="__('Data de Nascimento')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="dataNascimento" required autofocus placeholder="Ex: 01/01/1998"/>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mr-4">
                                <x-label for="sexo" :value="__('Sexo')" />
                                <x-select id="sexo" class="block mt-1 w-full" name="sexo" required autofocus :options="['Macho', 'Femea']" />
                            </div>

                            <div class="mr-4">
                                <x-label for="raca" :value="__('Raca')" />
                                <x-input id="raca" class="block mt-1 w-full" type="text" name="raca" required autofocus />
                            </div>

                            <div class="mr-4">
                                <x-label for="zoologico" :value="__('Zoologico')" />
                                <x-select id="zoologico" class="block mt-1 w-full" type="text" name="zoologico" required autofocus :options="$zoologicos" :textIndex="'name'" :keyIndex="'id'"/>
                            </div>


                            <div class="mr-4">
                                <x-label for="ingresso" :value="__('Forma Ingresso')" />
                                <x-input id="ingresso" class="block mt-1 w-full" type="text" name="ingresso" required autofocus />
                            </div>

                            <div class="mr-4">
                                <x-label for="status" :value="__('Status')" />
                                <x-input id="status" class="block mt-1 w-full" type="text" name="status" required autofocus />
                            </div>
                        </div>
                    </div>


                    <div class="flex items-center justify-end mt-4">

                        <x-button class="ml-3">
                            {{ __('Salvar Animal') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="py-12">
    <div class="flex justify-center py-12">
        @if(count($animais) > 0)
        <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex space-x-3 m-4 text-sm text-gray-500 font-medium">
                <div class="flex-auto flex space-x-3">
                    @include('components.animais.animais')
                </div>

            </div>
        </div>
    </div>
    </div>
    @endif

</x-app-layout>
