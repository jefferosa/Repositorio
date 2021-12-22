<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex space-x-3 m-4 text-sm font-medium">
                    <div class="flex-auto flex space-x-3">
                        <a class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 p-2" href="/alunos">
                            Painel Alunos
                        </a>
                    </div>
                </div>

                <div class="flex space-x-3 m-4 text-sm font-medium">
                    <div class="flex-auto flex space-x-3">
                        <a class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 p-2" href="/professores">
                            Painel Professores
                        </a>
                    </div>
                </div>
                <div class="flex space-x-3 m-4 text-sm font-medium">
                    <div class="flex-auto flex space-x-3">
                        <a class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 p-2" href="/cursos">
                        Painel Cursos
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
