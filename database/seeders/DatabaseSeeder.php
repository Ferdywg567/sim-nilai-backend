<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            SubjectSeeder::class,
            LearningObjectiveSeeder::class,
            ClassSeeder::class,
            StudentSeeder::class,
            GuruSeeder::class,
            // ExtraSeeder::class,
        ]);
    }
}
