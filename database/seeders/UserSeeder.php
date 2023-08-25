<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    use Traits\DisableForeignKey,Traits\TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->disableForeignKey();
        $this->truncate('users');
        \App\Models\User::factory(1000)->create();
        $this->enableForeignKey();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
