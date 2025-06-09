<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        DB::table('admins')->insert([
            ['id' => 1001, 'name' => 'Admin One', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 1915, 'name' => 'Admin Two', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 0731, 'name' => 'Admin Three', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2585, 'name' => 'Admin Four', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3436, 'name' => 'Admin Five', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2842, 'name' => 'Admin Six', 'created_at' => now(), 'updated_at' => now()],
            

            

        ]);
    }
}
