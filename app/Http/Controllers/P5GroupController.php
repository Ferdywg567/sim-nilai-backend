<?php

namespace App\Http\Controllers;

use App\Http\Requests\P5GroupRequest;
use App\Models\Guru;
use App\Models\P5DimensionSubElement;
use App\Models\P5Group;
use App\Models\P5Project;
use App\Models\Student;
use App\Models\StudyClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class P5GroupController extends BaseController
{
    function index()
    {
        $groups = P5Group::with('students', 'coordinator', 'projects.theme');

        return $this->sendResponse($groups->get()->toArray(), "List Kelompok P5 $this->found_msg");
    }

    function store(P5GroupRequest $request)
    {
        $group = P5Group::create($request->input());

        return $this->sendResponse($group->toArray(), "Data Kelompok P5 $this->created_msg");
    }

    function show(P5Group $p5_group)
    {
        return $this->sendResponse($p5_group->load('students', 'projects.phases', 'projects.theme', 'coordinator')->toArray(), "Data Kelompok P5 $this->found_msg");
    }

    function update(P5GroupRequest $request, P5Group $p5_group)
    {
        $p5_group->update($request->input());

        return $this->sendResponse($p5_group->toArray(), "Data Kelompok P5 $this->edited_msg");
    }

    function destroy(P5Group $p5_group)
    {
        $p5_group->delete();

        return $this->sendSuccess("Data Kelompok P5 $this->deleted_msg");
    }

    function getProjects(P5Group $p5_group)
    {
        $projects = $p5_group->projects;
        return $this->sendResponse($projects->toArray(), "Proyek Kelompok P5 $this->found_msg");
    }
    function addProject(P5Group $p5_group, P5Project $p5_project)
    {

        if (!$p5_group->projects->contains($p5_project)) {
            $p5_group->projects()->attach($p5_project);
        }

        $p5_group = $p5_group->load('projects');

        return $this->sendResponse($p5_group->toArray(), "Proyek Kelompok P5 $this->added_msg");
    }

    function deleteProject(P5Group $p5_group, P5Project $p5_project)
    {
        $p5_group->projects()->detach($p5_project);

        return $this->sendResponse($p5_group->load('projects')->toArray(), "Proyek Kelompok P5 $this->deleted_msg");
    }

    function addStudent(P5Group $p5_group, Student $student)
    {
        if ($student->p5Groups->contains($p5_group)) {
            return $this->sendResponse($student->toArray(), "Siswa telah berada di kelompok ini.");
        }

        $student->p5Groups()->attach($p5_group);

        return $this->sendResponse($student->load('p5Groups')->toArray(), "Siswa berhasil di masukkan ke dalam kelompok!");
    }

    function addStudentsFromClass(P5Group $p5_group, StudyClass $class)
    {
        $p5_group = $p5_group->load('students');
        $students = $class->students;

        foreach ($students as $student) {
            if (!$p5_group->students->contains($student)) {
                $p5_group->students()->attach($student);
            }
        }

        return $this->sendResponse($p5_group->load('students')->toArray(), "Siswa dari kelas $class->name telah ditambahkan ke kelompok!");
    }

    function getStudents(P5Group $p5_group)
    {
        $students = $p5_group->students;

        return $this->sendResponse($students->toArray(), "List data siswa untuk kelompok $this->found_msg");
    }

    function deleteStudent(P5Group $p5_group, Student $student) {
        $p5_group->students()->detach($student);

        return $this->sendSuccess("Siswa Terkait telah dikeluarkan dari kelompok!");
    }

}
