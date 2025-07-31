@extends('layouts.restaurant')

@section('title', 'Restaurant Menu - Choose Pizza')

@section('content')
<div class="p-6 space-y-6" x-data="{
    pizzas: [
        {
            id: 1,
            name: 'American Favorite',
            price: 4.87,
            image: '🍕',
            available: 18
        },
        {
            id: 2,
            name: 'Chicken Mushrom',
            price: 5.87,
            image: '🍕',
            available: 9
        },
        {
            id: 3,
            name: 'Favorite Cheese',
            price: 6.57,
            image: '🍕',
            available: 7
        },
        {
            id: 4,
            name: 'Meat Lovers',
            price: 6.37,
            image: '🍕',
            available: 14
        },
        {
            id: 5,
            name: 'Super Supreme',
            price: 5.75,
            image: '🍕',
            available: 10
        },
        {
            id: 6,
            name: 'Ultimate Cheese',
            price: 4.27,
            image: '🍕',
            available: 8
        },
        {
            id: 7,
            name: 'Pepperoni Classic',
            price: 5.99,
            image: '🍕',
            available: 12
        },
        {
            id: 8,
            name: 'Veggie Delight',
            price: 4.99,
            image: '🍕',
            available: 6
        },
        {
            id: 9,
            name: 'BBQ Chicken',
            price: 6.87,
            image: '🍕',
            available: 0
        },
        {
            id: 10,
            name: 'Hawaiian Special',
            price: 5.47,
            image: '🍕',
            available: 15
        }
    ],
    addToCart(pizza) {
        if (pizza.available <= 0) return;
        
        // Get parent Alpine data (from body)
        const parentData = this.$root;
        
        // Check if item already exists in cart
        const existingItem = parentData.cart.find(item => item.id === pizza.id);
        
        if (existingItem) {
            existingItem.quantity++;
        } else {
            parentData.cart.push({
                id: pizza.id,
                name: pizza.name,
                price: pizza.price,
                quantity: 1,
                image: pizza.image,
                crust: 'Regular Crust',
                extras: null,
                note: null
            });
        }
        
        console.log(`Added ${pizza.name} to cart`);
    }
}">
    
    <!-- Category Navigation -->
    <div class="mb-6">
        <x-category-nav />
    </div>

    <!-- Page Header -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Choose Pizza</h1>
        <span class="text-gray-500 font-medium" x-text="`${pizzas.length} Pizza Result`"></span>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <template x-for="pizza in pizzas" :key="pizza.id">
            <div>
                <x-product-card />
            </div>
        </template>
    </div>

    <!-- Load More Button (if needed) -->
    <div class="flex justify-center mt-8">
        <button class="px-6 py-3 bg-gray-100 text-gray-600 rounded-lg font-medium hover:bg-gray-200 transition-colors">
            Load More Products
        </button>
    </div>
</div>
@endsection