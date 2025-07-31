<?php

namespace Database\Factories;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2,true),
            'price' => $this->faker->randomFloat(2, 2, 50),
            'image' => $this->faker->imageUrl(400, 400, 'food', true),
            'description' => $this->faker->paragraph(),
            'category_id' => Category::factory(),
            'is_active' => $this->faker->boolean(90),
            //
        ];
    }
}
