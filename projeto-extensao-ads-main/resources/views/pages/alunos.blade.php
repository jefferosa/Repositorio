<x-app-layout>
    <script src="{{asset('js/custom.js')}}"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel Alunos') }}
        </h2>
    </x-slot>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="py-12">
        <div class="flex space-x-3 m-4 text-sm font-medium justify-center">
            <form method="POST" action="{{ route('alunos.store') }}">
                @csrf

                <div>
                    <div class="flex">
                        <div class="mr-4">
                            <x-label for="name" :value="__('Matricula')" />
                            <x-input id="matricula" class="block mt-1 w-full" type="text" name="matricula" readonly/>
                        </div>
                        <div class="mr-4">
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                        </div>
                        <div class="mr-4">
                            <x-label for="name" :value="__('Email')" />
                            <x-input id="name" class="block mt-1 w-full" type="email" name="email" required autofocus />
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
                            <x-select id="sexo" class="block mt-1 w-full" name="sexo" required autofocus :options="['Masculino', 'Feminino']" />
                        </div>

                        <div class="mr-4">
                            <x-label for="raca" :value="__('Raca')" />
                            <x-input id="raca" class="block mt-1 w-full" type="text" name="raca" required autofocus />
                        </div>

                        <div class="mr-4">
                            <x-label for="curso" :value="__('Curso')" />
                            <x-select id="curso" class="block mt-1 w-full" type="text" name="curso" required autofocus :options="$cursos" :textIndex="'name'" :keyIndex="'id'"/>
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
                        {{ __('Salvar Aluno') }}
                    </x-button>
                </div>
            </form>
        </div>

    </div>

    <div class="py-12">
        @if(count($alunos) > 0)
        <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex space-x-3 m-4 text-sm font-medium">
                <div class="flex-auto flex space-x-3">
                    @include('components.alunos.alunos')
                </div>

            </div>
        </div>
    </div>
    @endif

</x-app-layout>
