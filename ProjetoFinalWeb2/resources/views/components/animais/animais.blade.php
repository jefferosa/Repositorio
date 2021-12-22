<table class="table-auto">
    <tr>
        <th class="border">Codigo</th>
        <th class="border">Nome</th>
        <th class="border">Classe</th>
        <th class="border">Nacionalidade</th>
        <th class="border">Data Nascimento</th>
        <th class="border">Sexo</th>
        <th class="border">Raça</th>
        <th class="border">Forma de Ingresso</th>
        <th class="border">Zoologico</th>
        <th class="border">Status</th>
        <th class="border">Ações</th>
    </tr>
    @foreach($animais as $animal)

    <tbody>
        <tr>
            <td class="border px-4 py-2 text-white font-medium">{{$animal->codigo}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$animal->name}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$animal->classe}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$animal->uf_nacionalidade}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$animal->data_nascimento}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$animal->sexo}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$animal->raca}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$animal->forma_ingresso}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{ isset($animal->zoologico) ? $animal->zoologico->name : 'Não definido'}}</td>
            <td class="border px-4 py-2 text-white font-medium">{{$animal->status}}</td>
            <td class="flex border px-4 py-2 text-white font-medium" style="display: block; height:100%">
                <div class="mr-4 mb-2">
                    <a href="{{ route('animais.edit', $animal['id']) }}" class="p-1 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-75">Editar</a>
                </div>
                <div>
                <form action="{{ route('animais.destroy', $animal['id']) }}" method="POST">
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
