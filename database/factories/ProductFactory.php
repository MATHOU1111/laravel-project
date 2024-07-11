<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $categories = DB::table('categories')->pluck('id')->toArray();

        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'image' => $this->faker->imageUrl(400, 300, 'technics', true),
            'stock' => $this->faker->numberBetween(0, 50),
            'category_id' => $this->faker->randomElement($categories),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
