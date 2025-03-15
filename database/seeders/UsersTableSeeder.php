<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Digipreneurmatrik',
            'email' => 'Digipreneurmatrik_admin@email.com',
            'password' => Hash::make('digipreneurmatrik'),
            'role' => 'admin',
        ]);
    }
}
