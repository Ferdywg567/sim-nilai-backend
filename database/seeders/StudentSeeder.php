<?php

namespace Database\Seeders;

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
            ]
        ];
    }
}
