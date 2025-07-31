<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon Panier</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">

    <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">🛒 Mon Panier</h1>

        @if ($cartItems->isEmpty())
            <p class="text-gray-600">Ton panier est vide pour l’instant.</p>
        @else
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr>
                        <th class="border-b p-2">Produit</th>
                        <th class="border-b p-2">Quantité</th>
                        <th class="border-b p-2">Prix Unitaire</th>
                        <th class="border-b p-2">Total</th>
                        <th class="border-b p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp

                    @foreach ($cartItems as $item)
                        @php
                            $subTotal = $item->quantity * $item->unit_price;
                            $total += $subTotal;
                        @endphp
                        <tr>
                            <td class="p-2">{{ $item->product->name }}</td>
                            <td class="p-2">{{ $item->quantity }}</td>
                            <td class="p-2">{{ number_format($item->unit_price, 2) }} €</td>
                            <td class="p-2">{{ number_format($subTotal, 2) }} €</td>
                            <td class="p-2">
                                <form method="POST" action="{{ url('/cart/remove/' . $item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Retirer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-6 text-right font-semibold">
                Total général : {{ number_format($total, 2) }} €
            </div>

            <form method="POST" action="{{ url('/cart/clear') }}" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Vider le panier
                </button>
            </form>
        @endif

        <div class="mt-6">
            <a href="{{ route('menu') }}" class="text-blue-500 hover:underline">← Retour au menu</a>
        </div>
    </div>
</body>

</html>