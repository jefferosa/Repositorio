<table class="table-auto">
    <tr class="text-gray-500">
        <th class="border">ID</th>
        <th class="border">Nome</th>
        <th class="border">Ações</th>
    </tr>
    @foreach($zoologicos as $zoologico)
    <tbody>
        <tr>
            <td class="border px-4 py-2 text-white font-medium">{{$zoologico->id}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$zoologico->name}}</td>
            <td class="flex items-center border px-4 py-2 text-white font-medium">
            <div class="mr-4">
                    <a href="/zoologicos/{{$zoologico->id}}/animais" class="p-1 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">Ver Animais</a>
                </div>
                <div class="mr-4">
                    <a href="{{ route('zoologicos.edit', $zoologico['id']) }}" class="p-1 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-75">Editar</a>
                </div>
                <div>
                <form action="{{ route('zoologicos.destroy', $zoologico['id']) }}" method="POST">
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
