<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Article::factory(20)->create();
        \App\Models\Comment::factory(40)->create();

        \App\Models\User::factory()->create([
            'name' => 'Alice',
            'email' => 'bob@gmail.com'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'jhon',
            'email' => 'jhon@gmail.com'
        ]);

        $list = ['News', 'Tech', 'Web', 'App', 'Oss'];
        foreach ($list as $name) {
            \App\Models\Category::create(['name' => $name]);
        }
    }
}
