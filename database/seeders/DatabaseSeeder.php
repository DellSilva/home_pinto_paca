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
        User::factory()->create([
            'name' => 'Dell Silva',
            'email' => 'dell@email.com',
            'password' => bcrypt('123456')
        ]);

        User::factory(5)->create();

        $this->call(TodoSeeder::class);
    }
}
