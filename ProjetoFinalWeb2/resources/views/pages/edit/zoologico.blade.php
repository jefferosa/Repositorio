<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Zoologico') }}
        </h2>
    </x-slot>


    <div class="py-12">
    <div class="flex justify-center py-12">
        <div class="flex space-x-3 m-4 text-sm font-medium justify-center">
            <form method="POST" action="{{ route('zoologicos.update', $zoologico['id']) }}">
                @csrf
                @method('PUT')
                <div>
                    <div class="flex">
                        <div style="width: 400px">
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus value="{{$zoologico->name}}" />
                        </div>
                    </div>

                </div>


                <div class="flex items-center justify-end mt-4">

                    <x-button class="ml-3">
                        {{ __('Salvar Zoologico') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>
