<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'study_class_id' => 1,
                'name'           => 'Murid 1',
                'nis'            => 1111111111,
                'email'          => 'murid1@gmail.com',
                'address'        => 'Jl. Murid 1',
                'dob'            => Carbon::now()->subYears(11),
                'pob'            => 'Surabaya',
                'gender'         => 'P',
            ],
            [
                'study_class_id' => 1,
                'name'           => 'Murid 2',
                'nis'            => 2222222222,
                'email'          => 'murid2@gmail.com',
                'address'        => 'Jl. Murid 2',
                'dob'            => Carbon::now()->subYears(12),
                'pob'            => 'Surabaya',
                'gender'         => 'L',
            ],
            [
                'study_class_id' => 2,
                'name'           => 'Murid 3',
                'nis'            => 3333333333,
                'email'          => 'murid3@gmail.com',
                'address'        => 'Jl. Murid 3',
                'dob'            => Carbon::now()->subYears(11),
                'pob'            => 'Surabaya',
                'gender'         => 'P',
            ],
            [
                'study_class_id' => 2,
                'name'           => 'Murid 4',
                'nis'            => 4444444444,
                'email'          => 'murid4@gmail.com',
                'address'        => 'Jl. Murid 4',
                'dob'            => Carbon::now()->subYears(11),
                'pob'            => 'Surabaya',
                'gender'         => 'L',
            ],
            [
                'study_class_id' => 2,
                'name'           => 'Murid 5',
                'nis'            => 5555555555,
                'email'          => 'murid5@gmail.com',
                'address'        => 'Jl. Murid 5',
                'dob'            => Carbon::now()->subYears(11),
                'pob'            => 'Surabaya',
                'gender'         => 'L',
            ]
        ];

        Student::insert($datas);
    }
}
