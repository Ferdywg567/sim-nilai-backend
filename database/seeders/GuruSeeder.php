<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name'    => 'Guru 1',
                'nis'     => 111111111111,
                'email'   => 'guru1@gmail.com',
                'address' => 'Jl. Guru 1',
                'dob'     => Carbon::now()->subYears(31),
                'pob'     => 'Surabaya',
                'gender'  => 'P',
            ],
            [
                'name'    => 'Guru 2',
                'nis'     => 222222222222,
                'email'   => 'guru2@gmail.com',
                'address' => 'Jl. Guru 2',
                'dob'     => Carbon::now()->subYears(32),
                'pob'     => 'Surabaya',
                'gender'  => 'L',
            ]
        ];
    }
}
