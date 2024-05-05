<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Admin
         $user = \App\Models\User::factory()->create([
             'name' => 'Administrator',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('password'),
         ]);

         // Assign role
            $user->assignRole('admin');

         // User
            $user = \App\Models\User::factory()->create([
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'),
            ]);

            // Assign role
            $user->assignRole('user');

        // Buses
        \App\Models\Bus::factory(10)->create();

        // Location Logs
        \App\Models\LocationLog::factory(10)->create(
            [
                'bus_id' => 1,
            ]
        );

        \App\Models\LocationLog::factory(10)->create(
            [
                'bus_id' => 2,
            ]
        );

    }
}
