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
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.nl',
            'password' => bcrypt('password'),
        ]);
        \App\Models\User::factory(5)->create();

        \App\Models\Subject::factory(5)->create();
        \App\Models\Group::factory(5)->create();

        \App\Models\Post::factory(5)->create();
    }
}
