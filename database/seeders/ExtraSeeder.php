<?php

namespace Database\Seeders;

use App\Models\Extra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            'PMR',
            'Paduan Suara',
            'Renang',
            'Sepak Bola',
            'Tari Tradisional',
            'Bahasa Asing',
            'Seni Musik',
            'Pencak Silat'
        ];

        foreach ($datas as $value) {
            Extra::create([
                'name' => $value
            ]);
        }
    }
}
