<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $categories = DB::table('categories')->pluck('id')->toArray();

        foreach (range(1, 50) as $index) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 1, 1000),
                'image' => $faker->imageUrl(400, 300, 'technics', true),
                'stock' => $faker->numberBetween(1, 100),
                'category_id' => $faker->randomElement($categories),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}