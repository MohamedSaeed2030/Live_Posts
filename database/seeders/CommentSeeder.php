<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    use Traits\DisableForeignKey,Traits\TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->disableForeignKey();
        $this->truncate('comments');
        \App\Models\Comment::factory(10)->create();
        $this->enableForeignKey();


}}
