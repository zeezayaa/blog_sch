<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('kategoris')->insert([
            ['name' => 'School News', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Events', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('posts')->insert([
            [
                'title' => 'Welcome to School Blog',
                'content' => 'This is the first post to welcome all students and teachers.',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Annual Sports Day',
                'content' => 'Join us for the annual sports day on September 1st, 2025.',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}