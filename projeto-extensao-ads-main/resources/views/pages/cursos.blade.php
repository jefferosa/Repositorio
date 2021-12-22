<x-app-layout>
    <script src="{{asset('js/custom.js')}}"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel Curso') }}
        </h2>
    </x-slot>


    <x-auth-validation-errors class="mb-4" :errors="$errors" class="erros"/>

    <div class="flex justify-center py-12">
        <div class="flex space-x-3 m-4 text-sm font-medium justify-center">
            <form method="POST" action="{{ route('cursos.store') }}">
                @csrf

                <div class="mr-4">
                    <div class="flex">
                        <div style="width: 400px">
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                        </div>

                    </div>

                </div>


                <div class="flex items-center justify-end mt-4">

                    <x-button class="ml-3">
                        {{ __('Salvar Curso') }}
                    </x-button>
                </div>
            </form>
        </div>

    </div>

    <div class="flex justify-center py-12">
        @if(count($cursos) > 0)
        <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex space-x-3 m-4 text-sm font-medium">
                <div class="flex-auto flex space-x-3">
                    @include('components.cursos.cursos')
                </div>

            </div>
        </div>
    </div>
    @endif

</x-app-layout>
