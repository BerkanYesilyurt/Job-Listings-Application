<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       Listing::factory(20)->create();
        
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin Account',
            'email' => 'test@test.com',
            'email_verified_at' => null,
            'password' => '$2y$10$9Wa0zXBUYPaptDysRlfqiehVRR.y2ZZ.P6PugH3JNL7.xcXQ9eacO',
            'remember_token' => null,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);


    }
}
