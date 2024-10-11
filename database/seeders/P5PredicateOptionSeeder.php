<?php

namespace Database\Seeders;

use App\Models\P5PredicateOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class P5PredicateOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'code' => 'MB',
                'name' => 'Mulai Berkembang',
                'desc' => 'Dalam Mengerjakan proyek ini, :nama: sudah mulai memahami materi yang diberikan',
            ],
            [
                'code' => 'SB',
                'name' => 'Sedang Berkembang',
                'desc' => 'Dalam Mengerjakan proyek ini, :nama: sudah mampu memahami materi yang diberikan',
            ],
            [
                'code' => 'BSH',
                'name' => 'Berkembang Sesuai Harapan',
                'desc' => 'Dalam Mengerjakan proyek ini, :nama: telah memiliki kemampuan yang baik dalam memahami materi yang diberikan',
            ],
            [
                'code' => 'SAB',
                'name' => 'Sangat Berkembang',
                'desc' => 'Dalam Mengerjakan proyek ini, :nama: telah memiliki kemampuan yang sangat baik dalam memahami materi yang diberikan',
            ],
        ];

        P5PredicateOption::insert($datas);
    }
}
