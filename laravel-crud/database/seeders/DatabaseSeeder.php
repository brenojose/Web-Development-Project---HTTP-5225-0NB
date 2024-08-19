<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the UsersTableSeeder to seed the users table
        $this->call(UsersTableSeeder::class);
    }
}