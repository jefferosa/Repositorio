<x-app-layout>
    <script src="{{asset('js/custom.js')}}"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel Professor') }}
        </h2>
    </x-slot>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="py-12">
        <div class="flex space-x-3 m-4 text-sm font-medium justify-center">
            <form method="POST" action="{{ route('professores.store') }}">
                @csrf

                <div>
                    <div class="flex">

                        <div class="mr-4" style="width: 400px">
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                        </div>

                        <div class="mr-4" style="width: 400px">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email" required autofocus />
                        </div>

                        <div class="mr-4">
                            <x-label for="curso" :value="__('Curso')" />
                            <x-select id="name" class="block mt-1 w-full" name="curso[]" required autofocus :options="$cursos" :keyIndex="'id'" :textIndex="'name'" multiple="multiple"/>
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

    <div class="flex justify-center py-12">
        @if(count($professores) > 0)
        <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex space-x-3 m-4 text-sm font-medium">
                <div class="flex-auto flex space-x-3">
                    @include('components.professores.professores')
                </div>

            </div>
        </div>
    </div>
    @endif

</x-app-layout>
