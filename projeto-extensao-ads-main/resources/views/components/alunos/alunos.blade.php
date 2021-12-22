<table class="table-auto">
    <tr>
        <th class="border">Matricula</th>
        <th class="border">Nome</th>
        <th class="border">Email</th>
        <th class="border">Nacionalidade</th>
        <th class="border">Data Nascimento</th>
        <th class="border">Sexo</th>
        <th class="border">Raça</th>
        <th class="border">Forma de Ingresso</th>
        <th class="border">Curso</th>
        <th class="border">Status</th>
        <th class="border">Ações</th>
    </tr>
    @foreach($alunos as $aluno)

    <tbody>
        <tr>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->matricula}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->name}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->email}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->uf_nacionalidade}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->data_nascimento}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->sexo}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->raca}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->forma_ingresso}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{ isset($aluno->curso) ? $aluno->curso->name : 'Não definido'}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->status}}</td>
            <td class="flex border px-4 py-2 text-emerald-600 font-medium" style="display: block; height:100%">
                <div class="mr-4 mb-2">
                    <a href="{{ route('alunos.edit', $aluno['id']) }}" class="p-1 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-75">Editar</a>
                </div>
                <div>
                <form action="{{ route('alunos.destroy', $aluno['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Apagar" style="cursor:pointer" value="Apagar" class="p-1 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75"/>
                        </form>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach

</table>
