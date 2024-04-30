<?php

namespace Database\Seeders;

use App\Models\StudyClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudyClass::create([
            'name' => "X RPL 1"
        ]);
    }
}
