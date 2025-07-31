<div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer group" 
     @click="addToCart(pizza)">
    
    <!-- Product Image -->
    <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100 flex items-center justify-center">
        <span class="text-6xl" x-text="pizza.image"></span>
    </div>

    <!-- Product Info -->
    <div class="space-y-2">
        <h3 class="font-semibold text-gray-900 text-lg leading-tight" x-text="pizza.name"></h3>
        
        <div class="flex items-center justify-between">
            <span class="text-xl font-bold text-orange-500" x-text="`$${pizza.price.toFixed(2)}`"></span>
            
            <span class="text-sm" :class="pizza.available > 0 ? 'text-gray-500' : 'text-red-500 font-medium'" 
                  x-text="pizza.available > 0 ? `${pizza.available} Pan Available` : 'Out of Stock'"></span>
        </div>

        <!-- Add to Cart Button (appears on hover) -->
        <button 
            @click.stop="addToCart(pizza)"
            class="w-full bg-orange-500 text-white py-2 rounded-lg font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-orange-600"
            :class="pizza.available <= 0 ? 'opacity-50 cursor-not-allowed' : ''"
            :disabled="pizza.available <= 0"
            x-text="pizza.available > 0 ? 'Add to Cart' : 'Out of Stock'"
        >
        </button>
    </div>
</div>