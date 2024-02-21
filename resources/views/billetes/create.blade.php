<x-guest-layout>
    <form method="POST" action="{{ route('billetes.store') }}">
        @csrf

        <!-- Nombre -->
        <div>
            <x-input-label for="name" :value="'Id Usuario'" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Precio -->
        <div>
            <x-input-label for="codigo_vuelo" :value="'Id Usuario'" />
            <x-text-input id="codigo_vuelo" class="block mt-1 w-full" type="text" name="codigo_vuelo" :value="old('codigo_vuelo')" required autofocus autocomplete="codigo_vuelo" />
            <x-input-error :messages="$errors->get('codigo_vuelo')" class="mt-2" />
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
</x-guest-layout>
