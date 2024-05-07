<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'    => 'Administrator',
            'role_id' => 1,
            'email'   => 'admin@admin.com',
        ]);

        User::factory()->create([
            'name'    => 'Guru 1',
            'role_id' => 2,
            'email'   => 'guru1@gmail.com',
        ]);

        User::factory()->create([
            'role_id' => 2
        ]);
    }
}
