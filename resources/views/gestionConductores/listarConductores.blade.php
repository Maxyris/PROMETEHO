<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestion conductores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">{{ __('Choferes') }}</h3>

                    <table class="min-w-full table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">{{ __('ID') }}</th>
                                <th class="px-4 py-2">{{ __('Nombre') }}</th>
                                <th class="px-4 py-2">{{ __('Email') }}</th>
                                <th class="px-4 py-2">{{ __('Rol ID') }}</th>
                                <th class="px-4 py-2">{{ __('Fecha de Creación') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($choferes as $chofer)
                                <tr class="bg-white dark:bg-gray-700">
                                    <td class="border px-4 py-2">{{ $chofer->id }}</td>
                                    <td class="border px-4 py-2">{{ $chofer->name }}</td>
                                    <td class="border px-4 py-2">{{ $chofer->email }}</td>
                                    <td class="border px-4 py-2">{{ $chofer->rol_id }}</td>
                                    <td class="border px-4 py-2">{{ $chofer->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($choferes->isEmpty())
                        <p class="mt-4 text-red-500">{{ __('No hay choferes registrados.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
