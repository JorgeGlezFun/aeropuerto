<x-app-layout>
    <form method="POST" action="{{ route('vuelos.store') }}">
        @csrf

        <div>
            <x-input-label for="codigo" :value="'Código vuelo'" />
            <x-text-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo')" required autofocus autocomplete="codigo" />
            <x-input-error :messages="$errors->get('codigo')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="compania" :value="'Compañia'" />
            <x-text-input id="compania" class="block mt-1 w-full" type="text" name="compania" :value="old('compania')" required autofocus autocomplete="compania" />
            <x-input-error :messages="$errors->get('compania')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="n_asientos" :value="'Nº Asientos'" />
            <x-text-input id="n_asientos" class="block mt-1 w-full" type="text" name="n_asientos" :value="old('n_asientos')" required autofocus autocomplete="n_asientos" />
            <x-input-error :messages="$errors->get('n_asientos')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="precio" :value="'Precio'" />
            <x-text-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="old('precio')" required autofocus autocomplete="precio" />
            <x-input-error :messages="$errors->get('precio')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="aeropuerto_llegada" :value="'Aeropuerto llegada'" />
            <x-text-input id="aeropuerto_llegada" class="block mt-1 w-full" type="text" name="aeropuerto_llegada" :value="old('aeropuerto_llegada')" required autofocus autocomplete="aeropuerto_llegada" />
            <x-input-error :messages="$errors->get('aeropuerto_llegada')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="aeropuerto_salida" :value="'Aeropuerto salida'" />
            <x-text-input id="aeropuerto_salida" class="block mt-1 w-full" type="text" name="aeropuerto_salida" :value="old('aeropuerto_salida')" required autofocus autocomplete="aeropuerto_salida" />
            <x-input-error :messages="$errors->get('aeropuerto_salida')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="fecha_salida" :value="'Fecha salida'" />
            <x-text-input id="fecha_salida" class="block mt-1 w-full" type="text" name="fecha_salida" :value="old('fecha_salida')" required autofocus autocomplete="fecha_salida" />
            <x-input-error :messages="$errors->get('fecha_salida')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="fecha_llegada" :value="'Fecha llegada'" />
            <x-text-input id="fecha_llegada" class="block mt-1 w-full" type="text" name="fecha_llegada" :value="old('fecha_llegada')" required autofocus autocomplete="fecha_llegada" />
            <x-input-error :messages="$errors->get('fecha_llegada')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('billetes.index') }}">
                <x-secondary-button class="ms-4">
                    Volver
                </x-primary-button>
            </a>
            <x-primary-button class="ms-4">
                Insertar
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
