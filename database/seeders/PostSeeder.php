<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
       $posts= Post::factory(10)
        //
        ->create();


        //each post is Assighend To A Random User Id
        $posts->each(function (Post $post){
$post->users()->sync([FactoryHelper::getRandomModelId(User::class)]);

        });
        $this->enableForeignKey();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
