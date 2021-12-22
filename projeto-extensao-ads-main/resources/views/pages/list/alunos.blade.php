<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Curso {{  $curso->name }}
        </h2>
    </x-slot>

    <div class="m-auto container">
    <div class="py-12">
        <p>Lista de Alunos</p>
        @if(count($alunos) > 0)
        <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex space-x-3 m-4 text-sm font-medium">
                <div class="flex-auto flex space-x-3">
                    @include('components.alunos.alunos')
                </div>

            </div>
        </div>
        @endif
    </div>
    </div>

</x-app-layout>
