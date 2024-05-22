<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('users')->where('email', 'ismoil_007u@gmail.com')->doesntExist()) {
            DB::table('users')->insert([
                'name' => 'ismoil',
                'email' => 'ismoil_007u@gmail.com',
                'password' => Hash::make('ismoil'),
                'role' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
