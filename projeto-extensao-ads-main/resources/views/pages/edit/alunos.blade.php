<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Aluno') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="flex space-x-3 m-4 text-sm font-medium justify-center">
            <form method="POST" action="{{ route('alunos.update', $aluno['id']) }}">
                @csrf
                @method('PUT')
                <div>
                    <div class="flex">
                        <div>
                            <x-label for="name" :value="__('Matricula')" />
                            <x-input id="matricula" class="block mt-1 w-full" type="text" name="matricula" readonly value="{{$aluno->matricula}}" />
                        </div>
                        <div>
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus value="{{$aluno->name}}" />
                        </div>
                        <div>
                            <x-label for="name" :value="__('Email')" />
                            <x-input id="name" class="block mt-1 w-full" type="email" name="email" required autofocus value="{{$aluno->email}}"/>
                        </div>

                        <div>
                            <x-label for="uf" :value="__('UF')" />
                            <x-select id="uf" class="block mt-1 w-full" name="uf" required :options="['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO']" :selected="$aluno->uf_nacionalidade"/>
                        </div>

                        <div>
                            <x-label for="dataNascimento" :value="__('Data de Nascimento')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="dataNascimento" required autofocus value="{{$aluno->data_nascimento}}"/>
                        </div>
                    </div>

                    <div class="flex">
                        <div>
                            <x-label for="sexo" :value="__('Sexo')" />
                            <x-select id="sexo" class="block mt-1 w-full" name="sexo" required autofocus :options="['Masculino', 'Feminino']" :selected="$aluno->sexo" />
                        </div>

                        <div>
                            <x-label for="raca" :value="__('Raca')" />
                            <x-input id="raca" class="block mt-1 w-full" type="text" name="raca" required autofocus value="{{$aluno->raca}}"/>
                        </div>

                        <div>
                            <x-label for="curso" :value="__('Curso')" />
                            <x-select id="curso" class="block mt-1 w-full" type="text" name="curso" required autofocus :textIndex="'name'" :keyIndex="'id'" :selected="$aluno->curso" :options="$cursos"/>
                        </div>


                        <div>
                            <x-label for="ingresso" :value="__('Forma Ingresso')" />
                            <x-input id="ingresso" class="block mt-1 w-full" type="text" name="ingresso" required autofocus value="{{$aluno->forma_ingresso}}"/>
                        </div>

                        <div>
                            <x-label for="status" :value="__('Status')" />
                            <x-input id="status" class="block mt-1 w-full" type="text" name="status" required autofocus value="{{$aluno->status}}"/>
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
</x-app-layout>
