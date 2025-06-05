<x-layout>
    <div class="p-6 text-center text-white rounded-t-lg bg-gradient-to-r from-blue-500 to-purple-600">
        <h1 class="text-3xl font-bold">
            Histórico de encomendas
        </h1>
        <p class="mt-4 text-lg">
            Cliente: {{ $cliente->name }}
        </p>
    </div>

    <div class="max-w-full mx-auto mt-8 bg-white rounded-lg shadow-sm">
        <div class="p-6 text-center">
            <h1 class="text-2xl font-semibold text-gray-800">
                Itens enviados
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Código de rastreamento
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Origem
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destino
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente->enviados as $frete)
                    <tr class="transition-colors border-b hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('frete.rastreamento', ['codigo_rastreio' => $frete->codigo_rastreio]) }}" class="underline">
                            {{ $frete->codigo_rastreio }}
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $frete->origem }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $frete->destino }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 {{ $frete->status->pegarCorEtiqueta() }} rounded-full">
                            {{ $frete->status }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="max-w-full mx-auto mt-8 bg-white rounded-lg shadow-sm">
        <div class="p-6 text-center">
            <h1 class="text-2xl font-semibold text-gray-800">
                Itens Recebidos
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Código de rastreamento
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Origem
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destino
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($cliente->recebidos as $frete)
                    <tr class="transition-colors border-b hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('frete.rastreamento', ['codigo_rastreio' => $frete->codigo_rastreio]) }}" class="underline">
                            {{ $frete->codigo_rastreio }}
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $frete->origem }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $frete->destino }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1  {{ $frete->status->pegarCorEtiqueta() }} rounded-full">
                            {{ $frete->status }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>
