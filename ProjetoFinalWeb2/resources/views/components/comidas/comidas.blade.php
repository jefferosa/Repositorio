<table class="table-auto">
    <tr>
        <th class="border">ID</th>
        <th class="border">Nome</th>
        <th class="border">Nutriente</th>
        <th class="border">Zoologicos</th>
        <th class="border">Ações</th>
    </tr>
    @foreach($comidas as $comida)
    <tbody>
        <tr>
            <td class="border px-4 py-2 text-white font-medium">{{$comida->id}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$comida->name}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$comida->nutriente}}</td>

            <td class="border px-6 py-2 text-white font-medium">
            <ul>
                @foreach($comida->zoologicos as $zoologico)
                <li style="list-style: circle;">{{$zoologico->name}}</li>
                @endforeach
                </ul>
            </td>
            <td class="flex items-center border px-4 py-2 text-white font-medium" style="height:100%">
                <div class="mr-4">
                    <a href="{{ route('comidas.edit', $comida['id']) }}" class="p-1 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-75">Editar</a>
                </div>
                <div>
                <form action="{{ route('comidas.destroy', $comida['id']) }}" method="POST">
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
