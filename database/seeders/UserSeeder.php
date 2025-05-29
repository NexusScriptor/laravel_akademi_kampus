<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        User::create([
            'name' => 'Molyadi',
            'username' => 'molyadi12',
            'email' => 'molyadi@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
