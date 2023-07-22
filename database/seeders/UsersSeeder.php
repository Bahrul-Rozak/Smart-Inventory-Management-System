<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\UserFactory;

class UsersSeeder extends Seeder
{
    /**
     * Run the users seeds from users factory.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            User::create((new UserFactory())->definition());
        }
    }
}
