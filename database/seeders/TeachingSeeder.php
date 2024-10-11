<?php

namespace Database\Seeders;

use App\Models\Teaching;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'guru_id'    => 1, // guru 1
                'subject_id' => 1, // Matematika
                'study_class_id' => 1, // X RPL 1
            ],
            [
                'guru_id'    => 2, // guru 2
                'subject_id' => 1, // Matematika
                'study_class_id' => 1, // X RPL 1
            ],
        ];

        Teaching::insert($datas);
    }
}
