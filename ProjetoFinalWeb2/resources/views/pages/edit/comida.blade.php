<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Comida') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="flex space-x-3 m-4 text-sm font-medium justify-center">
            <form method="POST" action="{{ route('comidas.update', $comida['id']) }}">
                @csrf
                @method('PUT')
                <div>
                    <div class="flex">
                        <div class="mr-4 "style="width: 400px">
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus value="{{$comida->name}}" />
                        </div>
                        <div class="mr-4">
                            <x-label for="nutriente" :value="__('Nutriente')" />
                            <x-input id="nutriente" class="block mt-1 w-full" type="text" name="nutriente" required autofocus value="{{$comida->nutriente}}" />
                        </div>

                        <div>
                            <x-label for="zoologicos" :value="__('Zoologico')" />
                            <x-select id="zoologicos" name="zoologico[]" class="block mt-1 w-full" required :options="$zoologicos" :keyIndex="'id'" :textIndex="'name'" multiple/>
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
</x-app-layout>
