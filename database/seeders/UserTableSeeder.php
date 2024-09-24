<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'momon', 
            'last_name' => 'momono', 
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user1234'),
        ]);
    }
}
