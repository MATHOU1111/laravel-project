<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => 'password1234', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'John Doe11',
                'email' => 'john.doe123@example.com',
                'password' => 'password12345', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
