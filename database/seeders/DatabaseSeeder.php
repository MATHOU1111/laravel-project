<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorieSeeder::class,
            ProductSeeder::class, // Correct class name
            OrdersSeeder::class
        ]);
        $this->call(UserSeeder::class);
        $this->call(LoginSeeder::class);
    }
}