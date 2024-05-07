<?php

namespace Database\Seeders;

use App\Models\Guru;
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
                'user_id' => 1,
                'nip'     => 111111111111,
                'email'   => 'guru1@gmail.com',
                'address' => 'Jl. Guru 1',
                'phone'   => '085123456789',
                'dob'     => Carbon::now()->subYears(31),
                'pob'     => 'Surabaya',
                'gender'  => 'P',
            ],
            [
                'name'    => 'Guru 2',
                'user_id' => 2,
                'nip'     => 222222222222,
                'email'   => 'guru2@gmail.com',
                'address' => 'Jl. Guru 2',
                'phone'   => '085123456789',
                'dob'     => Carbon::now()->subYears(32),
                'pob'     => 'Surabaya',
                'gender'  => 'L',
            ]
        ];

        Guru::insert($datas);
    }
}
