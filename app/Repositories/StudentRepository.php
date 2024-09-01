<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Student;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StudentRepository {

    public function getAll(): Collection
    {
        return Student::all();
    }

    public function getStudentPagination(int $page)
    {
        return Student::paginate($page);
    }

    public function createStudent(array $data)
    {
        return Student::create($data);
    }

    public function getStudentById(string $id)
    {
        return Student::findOrFail($id);
    }

    public function updateStudent(array $data, string $id)
    {
        $student = Student::findOrFail($id);

        if(!$student)
        {
            throw new ModelNotFoundException("Student not found");
        }

        $student->update($data);

        return $student;
    }

    public function deleteStudent(string $id)
    {
        Student::destroy($id);
    }

}
