<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LoginSeeder extends Seeder
{
    public function run()
    {
        DB::table('logins')->insert([
            [
                'user_id' => 1, // Ensure these user IDs exist in the users table
                'login_time' => Carbon::now(),
                'ip_address' => '192.168.1.1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2, // Ensure these user IDs exist in the users table
                'login_time' => Carbon::now()->subDay(),
                'ip_address' => '192.168.1.2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
