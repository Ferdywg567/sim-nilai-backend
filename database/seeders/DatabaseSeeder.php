<?php

namespace Database\Seeders;

use App\Models\Teaching;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            P5Seeder::class,
            SubjectSeeder::class,
            LearningObjectiveSeeder::class,
            GuruSeeder::class,
            ClassSeeder::class,
            StudentSeeder::class,
            TeachingSeeder::class,
            P5PredicateOptionSeeder::class,
            // P5ProjectSeeder::class,
            // P5GroupSeeder::class,
            // ExtraSeeder::class,
        ]);
    }
}
