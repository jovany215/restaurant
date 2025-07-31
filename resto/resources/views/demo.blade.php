@extends('layouts.restaurant')

@section('title', 'Restaurant Demo - Interface Test')

@section('content')
<div class="p-6 space-y-6">
    
    <!-- Demo Instructions -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
        <h2 class="text-lg font-semibold text-blue-800 mb-2">🧪 Interface Demo</h2>
        <p class="text-blue-700 text-sm">
            Cette page de démonstration vous permet de tester toutes les fonctionnalités de l'interface restaurant POS.
        </p>
        <div class="mt-3 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
            <div>
                <h3 class="font-medium text-blue-800">Desktop:</h3>
                <ul class="text-blue-600 ml-4 list-disc">
                    <li>Sidebar fixe à gauche</li>
                    <li>Panier fixe à droite</li>
                    <li>Hover effects sur cartes</li>
                </ul>
            </div>
            <div>
                <h3 class="font-medium text-blue-800">Mobile:</h3>
                <ul class="text-blue-600 ml-4 list-disc">
                    <li>Menu hamburger</li>
                    <li>Panier overlay</li>
                    <li>Navigation tactile</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Category Navigation -->
    <div class="mb-6">
        <x-category-nav />
    </div>

    <!-- Page Header -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Choose Pizza</h1>
        <span class="text-gray-500 font-medium">10 Pizza Result</span>
    </div>

    <!-- Products Grid with Static Data -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        
        <!-- Pizza 1 - American Favorite -->
        <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer group" 
             onclick="addToCartDemo('American Favorite', 4.87, 18)">
            <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100 flex items-center justify-center">
                <span class="text-6xl">🍕</span>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 text-lg leading-tight">American Favorite</h3>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-orange-500">$4.87</span>
                    <span class="text-sm text-gray-500">18 Pan Available</span>
                </div>
                <button class="w-full bg-orange-500 text-white py-2 rounded-lg font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-orange-600">
                    Add to Cart
                </button>
            </div>
        </div>

        <!-- Pizza 2 - Chicken Mushroom -->
        <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer group" 
             onclick="addToCartDemo('Chicken Mushroom', 5.87, 9)">
            <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100 flex items-center justify-center">
                <span class="text-6xl">🍕</span>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 text-lg leading-tight">Chicken Mushroom</h3>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-orange-500">$5.87</span>
                    <span class="text-sm text-gray-500">9 Pan Available</span>
                </div>
                <button class="w-full bg-orange-500 text-white py-2 rounded-lg font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-orange-600">
                    Add to Cart
                </button>
            </div>
        </div>

        <!-- Pizza 3 - Favorite Cheese -->
        <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer group" 
             onclick="addToCartDemo('Favorite Cheese', 6.57, 7)">
            <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100 flex items-center justify-center">
                <span class="text-6xl">🍕</span>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 text-lg leading-tight">Favorite Cheese</h3>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-orange-500">$6.57</span>
                    <span class="text-sm text-gray-500">7 Pan Available</span>
                </div>
                <button class="w-full bg-orange-500 text-white py-2 rounded-lg font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-orange-600">
                    Add to Cart
                </button>
            </div>
        </div>

        <!-- Pizza 4 - Meat Lovers -->
        <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer group" 
             onclick="addToCartDemo('Meat Lovers', 6.37, 14)">
            <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100 flex items-center justify-center">
                <span class="text-6xl">🍕</span>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 text-lg leading-tight">Meat Lovers</h3>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-orange-500">$6.37</span>
                    <span class="text-sm text-gray-500">14 Pan Available</span>
                </div>
                <button class="w-full bg-orange-500 text-white py-2 rounded-lg font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-orange-600">
                    Add to Cart
                </button>
            </div>
        </div>

        <!-- Pizza 5 - Super Supreme -->
        <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer group" 
             onclick="addToCartDemo('Super Supreme', 5.75, 10)">
            <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100 flex items-center justify-center">
                <span class="text-6xl">🍕</span>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 text-lg leading-tight">Super Supreme</h3>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-orange-500">$5.75</span>
                    <span class="text-sm text-gray-500">10 Pan Available</span>
                </div>
                <button class="w-full bg-orange-500 text-white py-2 rounded-lg font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-orange-600">
                    Add to Cart
                </button>
            </div>
        </div>

        <!-- Pizza 6 - Ultimate Cheese -->
        <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer group" 
             onclick="addToCartDemo('Ultimate Cheese', 4.27, 8)">
            <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100 flex items-center justify-center">
                <span class="text-6xl">🍕</span>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 text-lg leading-tight">Ultimate Cheese</h3>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-orange-500">$4.27</span>
                    <span class="text-sm text-gray-500">8 Pan Available</span>
                </div>
                <button class="w-full bg-orange-500 text-white py-2 rounded-lg font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-orange-600">
                    Add to Cart
                </button>
            </div>
        </div>

        <!-- Pizza 7 - Pepperoni Classic -->
        <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer group" 
             onclick="addToCartDemo('Pepperoni Classic', 5.99, 12)">
            <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100 flex items-center justify-center">
                <span class="text-6xl">🍕</span>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 text-lg leading-tight">Pepperoni Classic</h3>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-orange-500">$5.99</span>
                    <span class="text-sm text-gray-500">12 Pan Available</span>
                </div>
                <button class="w-full bg-orange-500 text-white py-2 rounded-lg font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-orange-600">
                    Add to Cart
                </button>
            </div>
        </div>

        <!-- Pizza 8 - Out of Stock Demo -->
        <div class="bg-white rounded-2xl p-4 shadow-sm opacity-75 cursor-not-allowed">
            <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100 flex items-center justify-center">
                <span class="text-6xl">🍕</span>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 text-lg leading-tight">BBQ Chicken</h3>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-orange-500">$6.87</span>
                    <span class="text-sm text-red-500 font-medium">Out of Stock</span>
                </div>
                <button class="w-full bg-gray-400 text-white py-2 rounded-lg font-medium cursor-not-allowed" disabled>
                    Out of Stock
                </button>
            </div>
        </div>

    </div>

    <!-- Demo Actions -->
    <div class="mt-8 flex flex-wrap gap-4 justify-center">
        <button onclick="clearCartDemo()" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors">
            Clear Cart
        </button>
        <button onclick="fillCartDemo()" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors">
            Fill Demo Cart
        </button>
        <button onclick="toggleMobileView()" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
            Toggle Mobile View
        </button>
    </div>

</div>

<script>
// Demo functions for testing without Alpine.js conflicts
function addToCartDemo(name, price, available) {
    if (available <= 0) return;
    
    // Get Alpine data from body
    const alpineData = Alpine.$data(document.body);
    
    // Check if item exists
    const existingItem = alpineData.cart.find(item => item.name === name);
    
    if (existingItem) {
        existingItem.quantity++;
    } else {
        alpineData.cart.push({
            id: Date.now(),
            name: name,
            price: price,
            quantity: 1,
            image: '🍕',
            crust: 'Regular Crust',
            extras: null,
            note: null
        });
    }
    
    console.log(`Added ${name} to cart - Total items: ${alpineData.cartCount}`);
}

function clearCartDemo() {
    const alpineData = Alpine.$data(document.body);
    alpineData.cart = [];
    console.log('Cart cleared');
}

function fillCartDemo() {
    const alpineData = Alpine.$data(document.body);
    alpineData.cart = [
        {
            id: 1,
            name: 'Orange Juice',
            note: 'Less Ice',
            price: 2.87,
            quantity: 4,
            image: '🥤'
        },
        {
            id: 2,
            name: 'American Favorite',
            crust: 'Stuffed Crust Sosis',
            extras: 'Extra Mozarella',
            price: 4.87,
            quantity: 1,
            image: '🍕'
        },
        {
            id: 3,
            name: 'Super Supreme',
            crust: 'Stuffed Crust Cheese',
            price: 5.75,
            quantity: 1,
            image: '🍕'
        }
    ];
    console.log('Demo cart filled');
}

function toggleMobileView() {
    const width = window.innerWidth < 1024 ? 1200 : 375;
    window.resizeTo(width, window.innerHeight);
    console.log(`Toggled to ${width < 1024 ? 'mobile' : 'desktop'} view`);
}
</script>
@endsection