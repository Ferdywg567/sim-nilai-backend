<?php

namespace Database\Seeders;

use App\Models\SubjectLearningObjective;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'subject_id' => 1,
                'phase'      => 'E',
                'grade'      => 10,
                'semester'   => 1,
                'desc'       => 'menghitung hasil penjumlahan pengurangan perkalian dan pembagian bilangan bulat dan pecahan',
            ],
            [
                'subject_id' => 1,
                'phase'      => 'E',
                'grade'      => 10,
                'semester'   => 1,
                'desc'       => 'menentukan dan memprediksi pola dengan barisan bilangan dan barisan konfigurasi objek',
            ],
            [
                'subject_id' => 1,
                'phase'      => 'E',
                'grade'      => 10,
                'semester'   => 1,
                'desc'       => 'mengidentifikasi unsur-unsur dan menentukan keliling dan luas lingkaran',
            ],
            [
                'subject_id' => 1,
                'phase'      => 'E',
                'grade'      => 10,
                'semester'   => 1,
                'desc'       => 'mengidentifikasi dan menggambar berbagai jaring-jaring bangun ruang sederhana',
            ],
        ];

        foreach ($datas as $key => $value) {
            SubjectLearningObjective::create($value);
        }
    }
}
