<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser = User::create([
            'name'              => "Marketing",
            'email'             => 'demo@codash.com',
            'password'          => Hash::make('codash'),
            'email_verified_at' => now(),
        ]);

        $demoUser2 = User::create([
            'name'              => $faker->name,
            'email'             => 'admin@codash.com',
            'password'          => Hash::make('codash'),
            'email_verified_at' => now(),
        ]);
    }
}
