<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'First Post Title',
            'body' => 'First Post Description'
        ]);

        DB::table('posts')->insert([
            'title' => 'Second Post Title',
            'body' => 'Second Post Description'
        ]);
    }
}
