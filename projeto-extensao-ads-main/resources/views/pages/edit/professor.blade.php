<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Professor') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="flex space-x-3 m-4 text-sm font-medium justify-center">
            <form method="POST" action="{{ route('professores.update', $professor['id']) }}">
                @csrf
                @method('PUT')
                <div>
                    <div class="flex">
                        <div class="mr-4 "style="width: 400px">
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus value="{{$professor->name}}" />
                        </div>
                        <div class="mr-4">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email" required autofocus value="{{$professor->email}}" />
                        </div>

                        <div>
                            <x-label for="cursos" :value="__('Cursos')" />
                            <x-select id="cursos" name="curso[]" class="block mt-1 w-full" required :options="$cursos" :keyIndex="'id'" :textIndex="'name'" multiple/>
                        </div>
                    </div>

                </div>


                <div class="flex items-center justify-end mt-4">

                    <x-button class="ml-3">
                        {{ __('Salvar Professor') }}
                    </x-button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
