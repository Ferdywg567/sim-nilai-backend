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
            //* Matematika
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

            //* Bahasa Indonesia
            [
                'subject_id' => 2,
                'phase'      => 'E',
                'grade'      => 10,
                'semester'   => 1,
                'desc'       => 'Mensyukuri anugerah Tuhan akan keberadaan bahasa Indonesia dan menggunakannnya sesuai dengan kaidah dan konteks untuk mempersatukan bangsa',
            ],
            [
                'subject_id' => 2,
                'phase'      => 'E',
                'grade'      => 10,
                'semester'   => 1,
                'desc'       => 'Mensyukuri anugerah Tuhan akan keberadaan bahasa Indonesia dan menggunakannya sebagai sarana komunikasi dalam memahami, menerapkan, dan menganalisis informasi lisan dan tulis melalui teks anekdot, eksposisi, laporan hasil observasi, prosedur kompleks, dan negosiasi',
            ],
            [
                'subject_id' => 2,
                'phase'      => 'E',
                'grade'      => 10,
                'semester'   => 1,
                'desc'       => 'Mensyukuri anugerah Tuhan akan keberadaan bahasa Indonesia dan menggunakannya sebagai sarana komunikasi dalam mengolah, menalar, dan menyajikan  informasi lisan dan tulis melalui teks anekdot, eksposisi, laporan hasil observasi, prosedur kompleks, dan negosiasi ',
            ],
            [
                'subject_id' => 2,
                'phase'      => 'E',
                'grade'      => 10,
                'semester'   => 1,
                'desc'       => 'Menunjukkan sikap tanggung jawab, peduli, responsif, dan santun dalam menggunakan bahasa Indonesia untuk membuat anekdot mengenai permasalahan sosial, lingkungan, dan kebijakan publik',
            ],
        ];

        SubjectLearningObjective::insert($datas);
    }
}
