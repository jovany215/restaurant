<div class="flex items-start space-x-3 p-3 bg-gray-50 rounded-lg">
    <!-- Product Image -->
    <div class="flex-shrink-0">
        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
            <span class="text-2xl" x-text="item.image"></span>
        </div>
    </div>

    <!-- Product Details -->
    <div class="flex-1 min-w-0">
        <h4 class="font-medium text-gray-900 text-sm" x-text="item.name"></h4>
        
        <!-- Product Options -->
        <template x-if="item.crust">
            <p class="text-xs text-gray-500 mt-1">
                <span class="font-medium">Crust:</span> <span x-text="item.crust"></span>
            </p>
        </template>
        
        <template x-if="item.extras">
            <p class="text-xs text-gray-500">
                <span class="font-medium">Extras:</span> <span x-text="item.extras"></span>
            </p>
        </template>
        
        <template x-if="item.note">
            <p class="text-xs text-gray-500">
                <span class="font-medium">Note:</span> <span x-text="item.note"></span>
            </p>
        </template>

        <!-- Price -->
        <div class="flex items-center justify-between mt-2">
            <span class="font-semibold text-gray-900" x-text="`$${item.price.toFixed(2)}`"></span>
            
            <!-- Quantity Controls -->
            <div class="flex items-center space-x-2">
                <button 
                    @click="if(item.quantity > 1) item.quantity--"
                    class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center hover:bg-gray-300 transition-colors"
                >
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                    </svg>
                </button>
                
                <span class="w-8 text-center text-sm font-medium" x-text="item.quantity"></span>
                
                <button 
                    @click="item.quantity++"
                    class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center hover:bg-gray-300 transition-colors"
                >
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Edit Button -->
    <div class="flex-shrink-0">
        <button class="text-gray-400 hover:text-orange-500 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
        </button>
    </div>
</div>