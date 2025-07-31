<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Restaurant POS')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="h-full bg-gray-50" x-data="{ 
    cartOpen: false, 
    sidebarOpen: false,
    currentOrder: '#907653',
    table: 'T1',
    cart: [
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
        },
        {
            id: 4,
            name: 'Favorite Cheese',
            crust: 'Stuffed Crust Sosis',
            price: 6.57,
            quantity: 1,
            image: '🍕'
        }
    ],
    get cartTotal() {
        return this.cart.reduce((total, item) => total + (item.price * item.quantity), 0);
    },
    get cartCount() {
        return this.cart.reduce((count, item) => count + item.quantity, 0);
    },
    get tax() {
        return this.cartTotal * 0.1;
    },
    get finalTotal() {
        return this.cartTotal + this.tax;
    }
}"
<div class="flex h-full">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden lg:ml-20">
        <!-- Header -->
        <header class="bg-white border-b border-gray-200 px-4 lg:px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Left: Menu button (mobile) + Search -->
                <div class="flex items-center space-x-4 flex-1">
                    <button 
                        @click="sidebarOpen = !sidebarOpen"
                        class="lg:hidden p-2 rounded-lg hover:bg-gray-100"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    
                    <!-- Search Bar -->
                    <div class="relative flex-1 max-w-md">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            placeholder="Search category or menu"
                            class="block w-full pl-10 pr-3 py-3 border border-gray-200 rounded-xl bg-gray-50 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        >
                    </div>

                    <!-- Stock Alert -->
                    <div class="hidden sm:flex items-center space-x-2 text-orange-600 bg-orange-50 px-3 py-2 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm font-medium">5 Items out of stocks</span>
                    </div>
                </div>

                <!-- Right: Order info + Cart button -->
                <div class="flex items-center space-x-4">
                    <div class="hidden sm:block text-right">
                        <div class="text-sm text-gray-500">Current Orders</div>
                        <div class="font-semibold text-gray-900" x-text="currentOrder"></div>
                    </div>
                    <div class="hidden sm:block text-right">
                        <div class="text-sm text-gray-500">Table</div>
                        <div class="font-semibold text-gray-900" x-text="table"></div>
                    </div>
                    <button 
                        @click="cartOpen = !cartOpen"
                        class="relative lg:hidden bg-orange-500 text-white p-2 rounded-lg hover:bg-orange-600 transition-colors"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5-6m0 0h15.5M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                        </svg>
                        <span x-show="cartCount > 0" x-text="cartCount" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center"></span>
                    </button>
                </div>
            </div>
        </header>
        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">
            <!-- Content Area -->
            <main class="flex-1 overflow-auto">
                @yield('content')
            </main>

            <!-- Cart Sidebar (Desktop) -->
            <aside class="hidden lg:block w-80 bg-white border-l border-gray-200 overflow-y-auto">
                <div class="p-6">
                    <!-- Order Header -->
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <div class="text-sm text-gray-500">Current Orders</div>
                            <div class="font-semibold text-lg" x-text="currentOrder"></div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm text-gray-500">Table</div>
                            <div class="font-semibold text-lg" x-text="table"></div>
                        </div>
                    </div>

                    <!-- Dine In / Take Away Toggle -->
                    <div class="flex bg-gray-100 rounded-lg p-1 mb-6">
                        <button class="flex-1 py-2 px-4 text-sm font-medium bg-orange-500 text-white rounded-md">
                            Dine In
                        </button>
                        <button class="flex-1 py-2 px-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                            Take Away
                        </button>
                    </div>

                    <!-- Cart Items -->
                    <div class="space-y-4 mb-6">
                        <template x-for="item in cart" :key="item.id">
                            <x-cart-item />
                        </template>
                    </div>

                    <!-- Order Summary -->
                    <div class="border-t pt-4 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span x-text="`Items(${cartCount})`"></span>
                            <span x-text="`$${cartTotal.toFixed(2)}`"></span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Tax (10%)</span>
                            <span x-text="`$${tax.toFixed(2)}`"></span>
                        </div>
                        <div class="border-t pt-2">
                            <div class="flex justify-between font-semibold text-lg">
                                <span>Total</span>
                                <span x-text="`$${finalTotal.toFixed(2)}`"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Print Bills Button -->
                    <button class="w-full bg-orange-500 text-white py-3 rounded-lg font-medium hover:bg-orange-600 transition-colors">
                        Print Bills
                    </button>
                </div>
            </aside>
        </div>
    </div>                    <div class="font-semibold text-lg" x-text="currentOrder"></div>
                </div>
                <div class="text-right">
                    <div class="text-sm text-gray-500">Table</div>
                    <div class="font-semibold text-lg" x-text="table"></div>
                </div>
            </div>

            <div class="flex bg-gray-100 rounded-lg p-1 mb-6">
                <button class="flex-1 py-2 px-4 text-sm font-medium bg-orange-500 text-white rounded-md">
                    Dine In
                </button>
                <button class="flex-1 py-2 px-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                    Take Away
                </button>
            </div>

            <div class="space-y-4 mb-6">
                <template x-for="item in cart" :key="item.id">
                    <x-cart-item />
                </template>
            </div>

            <div class="border-t pt-4 space-y-2">
                <div class="flex justify-between text-sm">
                    <span x-text="`Items(${cartCount})`"></span>
                    <span x-text="`$${cartTotal.toFixed(2)}`"></span>
                </div>
                <div class="flex justify-between text-sm">
                    <span>Tax (10%)</span>
                    <span x-text="`$${tax.toFixed(2)}`"></span>
                </div>
                <div class="border-t pt-2">
                    <div class="flex justify-between font-semibold text-lg">
                        <span>Total</span>
                        <span x-text="`$${finalTotal.toFixed(2)}`"></span>
                    </div>
                </div>
            </div>

            <button class="w-full bg-orange-500 text-white py-3 rounded-lg font-medium hover:bg-orange-600 transition-colors">
                Print Bills
            </button>
        </div>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div x-show="sidebarOpen" 
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-40 lg:hidden"
         @click="sidebarOpen = false">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
</div>

</body>
</html>