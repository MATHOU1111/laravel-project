<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Électronique'],
            ['name' => 'Vêtements'],
            ['name' => 'Maison'],
            ['name' => 'Livres'],
            ['name' => 'Jouets']
        ]);
    }
}
