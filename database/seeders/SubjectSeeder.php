<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'name' => 'Matematika (Umum)',
                'competencies' => [
                    [
                        'code'            => '001',
                        'description'     => 'menghitung hasil penjumlahan pengurangan perkalian dan pembagian bilangan bulat dan pecahan',
                        'curriculum_year' => '2024',
                    ],
                    [
                        'code'            => '002',
                        'description'     => 'menentukan dan memprediksi pola dengan barisan bilangan dan barisan konfigurasi objek',
                        'curriculum_year' => '2024',
                    ],
                    [
                        'code'            => '003',
                        'description'     => 'mengidentifikasi unsur-unsur dan menentukan keliling dan luas lingkaran',
                        'curriculum_year' => '2024',
                    ],
                    [
                        'code'            => '004',
                        'description'     => 'mengidentifikasi dan menggambar berbagai jaring-jaring bangun ruang sederhana',
                        'curriculum_year' => '2024',
                    ],
                ]
            ],
            [
                'name' => 'Bahasa Indonesia (Umum)',
                'competencies' => [
                    [
                        'code'            => '101',
                        'description'     => 'Mensyukuri anugerah Tuhan akan keberadaan bahasa Indonesia dan menggunakannnya sesuai dengan kaidah dan konteks untuk mempersatukan bangsa',
                        'curriculum_year' => '2024',
                    ],
                    [
                        'code'            => '102',
                        'description'     => 'Mensyukuri anugerah Tuhan akan keberadaan bahasa Indonesia dan menggunakannya sebagai sarana komunikasi dalam memahami, menerapkan, dan menganalisis informasi lisan dan tulis melalui teks anekdot, eksposisi, laporan hasil observasi, prosedur kompleks, dan negosiasi',
                        'curriculum_year' => '2024',
                    ],
                    [
                        'code'            => '103',
                        'description'     => 'Mensyukuri anugerah Tuhan akan keberadaan bahasa Indonesia dan menggunakannya sebagai sarana komunikasi dalam mengolah, menalar, dan menyajikan  informasi lisan dan tulis melalui teks anekdot, eksposisi, laporan hasil observasi, prosedur kompleks, dan negosiasi',
                        'curriculum_year' => '2024',
                    ],
                    [
                        'code'            => '104',
                        'description'     => 'Menunjukkan sikap tanggung jawab, peduli, responsif, dan santun dalam menggunakan bahasa Indonesia untuk membuat anekdot mengenai permasalahan sosial, lingkungan, dan kebijakan publik',
                        'curriculum_year' => '2024',
                    ],
                ]
            ],
        ];

        foreach ($subjects as $item) {
            $competencies = $item['competencies'];

            unset($item['competencies']);

            $subject = Subject::create($item);

            $subject->competencies()->createMany($competencies);
        }
    }
}
