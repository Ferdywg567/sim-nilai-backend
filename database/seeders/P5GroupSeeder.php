<?php

namespace Database\Seeders;

use App\Models\P5Group;
use App\Models\P5Project;
use App\Models\StudyClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class P5GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group_data = [
            'guru_id'    => 1,
            'name'       => 'Kewirausahaan X RPL 1',
            'grade'      => 10,
            'phase'      => 'E',
        ];

        $group = P5Group::create($group_data);

        $this->addClass($group, 1);
        $this->addProject($group, 1);
    }

    function addClass($group, $class_id)
    {
        $class = StudyClass::find($class_id);

        $students = $class->students;

        foreach ($students as $student) {
            if (!$group->students->contains($student)) {
                $group->students()->attach($student);
            }
        }
    }

    function addProject($group, $project_id)
    {
        $project = P5Project::find($project_id);

        if (!$group->projects->contains($project)) {
            $group->projects()->attach($project);
        }
    }
}
