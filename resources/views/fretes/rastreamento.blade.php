<x-layout>
    <div class="max-w-full mx-auto mt-8 bg-white rounded-lg shadow-sm">
        <div class="p-6 text-center text-white rounded-t-lg bg-gradient-to-r from-blue-500 to-purple-600">
            <h1 class="text-3xl font-bold">
                Rastreamento Encomenda
            </h1>
            <p class="mt-4 text-lg">
                Código de Rastreamento: <span class="font-semibold">{{ $frete->codigo_rastreio }}</span>
            </p>
            <p class="mt-2">
                Status:
                <span class="px-3 py-1 rounded-full">
                    {{ $frete->status }}
                </span>
            </p>
            <p class="mt-2">
                Destino: <span class="font-semibold">{{ $frete->destinho }}</span>
            </p>
        </div>

        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Descrição
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Data
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="transition-colors border-b hover:bg-gray-50">
                    <td class="px-6 py-4">
                        Transferido da unidade A para unidade B
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        01/05/2026
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>
