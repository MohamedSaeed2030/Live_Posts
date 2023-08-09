<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use Traits\DisableForeignKey,Traits\TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->disableForeignKey();
        $this->truncate('posts');
        \App\Models\Post::factory(10)->create();
        $this->enableForeignKey();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
