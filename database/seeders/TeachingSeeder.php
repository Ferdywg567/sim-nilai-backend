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
                'user_id'    => 2, // guru 1
                'subject_id' => 1, // Matematika
                'study_class_id' => 1, // X RPL 1
            ],
            [
                'user_id'    => 3, // guru 2
                'subject_id' => 1, // Matematika
                'study_class_id' => 1, // X RPL 1
            ],
        ];

        Teaching::insert($datas);
    }
}
