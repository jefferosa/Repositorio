<table class="table-auto">
    <tr>
        <th class="border">ID</th>
        <th class="border">Nome</th>
        <th class="border">Email</th>
        <th class="border">Cursos</th>
        <th class="border">Ações</th>
    </tr>
    @foreach($professores as $professor)
    <tbody>
        <tr>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$professor->id}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$professor->name}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$professor->email}}</td>

            <td class="border px-6 py-2 text-emerald-600 font-medium">
            <ul>
                @foreach($professor->cursos as $curso)
                <li style="list-style: circle;">{{$curso->name}}</li>
                @endforeach
                </ul>
            </td>
            <td class="flex items-center border px-4 py-2 text-emerald-600 font-medium" style="height:100%">
                <div class="mr-4">
                    <a href="{{ route('professores.edit', $professor['id']) }}" class="p-1 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-75">Editar</a>
                </div>
                <div>
                <form action="{{ route('professores.destroy', $professor['id']) }}" method="POST">
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
