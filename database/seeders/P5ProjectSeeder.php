<?php

namespace Database\Seeders;

use App\Models\P5Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class P5ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_data = [
            'p5_theme_id' => 2, // Kearifan Lokal
            'phase'       => 'E',
            'code'        => 'PJ01',
            'name'        => 'Pembuatan Kripik Singkong Aneka Rasa',
            'description' => 'Membangun Jiwa Wirausaha Sejak Dini',
        ];

        $project = P5Project::create($project_data);

        $phases = [1, 11, 22];

        $project->phases()->sync($phases);
    }
}
