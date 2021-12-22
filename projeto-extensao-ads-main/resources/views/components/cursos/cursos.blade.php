<table class="table-auto">
    <tr>
        <th class="border">ID</th>
        <th class="border">Nome</th>
        <th class="border">Ações</th>
    </tr>
    @foreach($cursos as $curso)
    <tbody>
        <tr>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$curso->id}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$curso->name}}</td>
            <td class="flex items-center border px-4 py-2 text-emerald-600 font-medium">
            <div class="mr-4">
                    <a href="/cursos/{{$curso->id}}/alunos" class="p-1 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">Ver Alunos</a>
                </div>
                <div class="mr-4">
                    <a href="{{ route('cursos.edit', $curso['id']) }}" class="p-1 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-75">Editar</a>
                </div>
                <div>
                <form action="{{ route('cursos.destroy', $curso['id']) }}" method="POST">
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
