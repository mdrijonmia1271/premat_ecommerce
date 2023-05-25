<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rijon Mia',
            'email' => 'rijonmia1271@gmail.com', //Str::random(10).'gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
