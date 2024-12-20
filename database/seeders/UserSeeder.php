<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => env('DEFAULT_USER_NAME', 'MrUser'),
            'email' => env('DEFAULT_USER_EMAIL', '@user@email.mail'),
            'password' => (env('DEFAULT_USER_PASSWORD_HASH', bcrypt('password'))),
        ]);

        User::factory(10)->create();
    }
}
