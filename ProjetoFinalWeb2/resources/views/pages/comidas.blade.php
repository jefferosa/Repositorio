<x-app-layout>
    <script src="{{asset('js/custom.js')}}"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel Comida') }}
        </h2>
    </x-slot>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="py-12">
        <div class="flex justify-center py-12">
            <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex space-x-3 m-4 text-sm font-medium justify-center">
                    <form method="POST" action="{{ route('comidas.store') }}">
                        @csrf

                        <div>
                            <div class="flex">

                                <div class="mr-4" style="width: 400px">
                                    <x-label for="name" :value="__('Nome')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                                </div>

                                <div class="mr-4" style="width: 400px">
                                    <x-label for="nutriente" :value="__('Nutriente')" />
                                    <x-input id="nutriente" class="block mt-1 w-full" type="text" name="nutriente" required autofocus />
                                </div>

                                <div class="mr-4">
                                    <x-label for="zoologico" :value="__('Zoologico')" />
                                    <x-select id="name" class="block mt-1 w-full" name="zoologico[]" required autofocus :options="$zoologicos" :keyIndex="'id'" :textIndex="'name'" multiple="multiple"/>
                                </div>
                            </div>


                        </div>


                        <div class="flex items-center justify-end mt-4">

                            <x-button class="ml-3">
                                {{ __('Salvar Comida') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-12">
        @if(count($comidas) > 0)
        <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex space-x-3 m-4 text-sm text-gray-500 font-medium">
                <div class="flex-auto flex space-x-3">
                    @include('components.comidas.comidas')
                </div>

            </div>
        </div>
    </div>
    @endif

</x-app-layout>
