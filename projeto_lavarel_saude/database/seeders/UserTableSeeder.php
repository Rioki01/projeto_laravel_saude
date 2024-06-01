<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create(['nome' => 'Test User', 'email' => 'test@user.com', 'cpf' => '123456789-10', 'phone' => '1111 1111', 'password' => '12345']);
        User::create(['nome' => 'Test User2', 'email' => 'test2@user.com', 'cpf' => '123456789-11', 'phone' => '2222 2222', 'password' => '12345']);
    }
}
