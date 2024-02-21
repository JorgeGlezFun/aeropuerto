<x-app-layout>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Código vuelo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Compañia
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NºAsientos
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Origen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Destino
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha salida
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha llegada
                    </th>
                    <th scope="col" class="px-6 py-3" colspan="2">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vuelos as $vuelo)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row"
                        class="w-auto px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $vuelo->codigo }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $vuelo->compania->nombre }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $vuelo->n_asientos }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $vuelo->aeropuertoLlegada->nombre }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $vuelo->aeropuertoSalida->nombre }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $vuelo->fecha_salida }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $vuelo->fecha_llegada }}
                    </td>
                    <td>
                        <a href="{{ route('vuelos.edit', ['vuelo' => $vuelo]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <x-primary-button>
                                Editar
                            </x-primary-button>
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('vuelos.destroy', ['vuelo' => $vuelo]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-primary-button class="bg-red-500">
                                Borrar
                            </x-primary-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('vuelos.create') }}" class="flex justify-center mt-4 mb-4">
            <x-primary-button class="bg-green-500">Insertar un nuevo vuelo</x-primary-button>
        </form>
    </div>
</x-app-layout>
