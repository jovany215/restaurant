@props(['categories' => [
    ['name' => 'Pizza', 'icon' => '🍕', 'active' => true],
    ['name' => 'Burger', 'icon' => '🍔', 'active' => false],
    ['name' => 'Rice', 'icon' => '🍚', 'active' => false],
    ['name' => 'Snacks', 'icon' => '🍿', 'active' => false],
    ['name' => 'Drinks', 'icon' => '🥤', 'active' => false],
]])

<div class="flex space-x-2 overflow-x-auto scrollbar-hide py-2" x-data="{ activeCategory: 'Pizza' }">
    @foreach($categories as $category)
        <button 
            @click="activeCategory = '{{ $category['name'] }}'"
            :class="activeCategory === '{{ $category['name'] }}' ? 
                'bg-orange-500 text-white shadow-lg' : 
                'bg-white text-gray-600 hover:bg-gray-50 border border-gray-200'"
            class="flex items-center space-x-2 px-4 py-3 rounded-2xl font-medium text-sm whitespace-nowrap transition-all duration-200 flex-shrink-0"
        >
            <span class="text-lg">{{ $category['icon'] }}</span>
            <span>{{ $category['name'] }}</span>
        </button>
    @endforeach
</div>

<style>
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
</style>