<?php

namespace App\Services;

use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use \Illuminate\Support\Facades\Validator;
use App\Repositories\StudentRepository;

class StudentService {

    private $studentRepository;

    public function __construct(StudentRepository $studentRepository) {
        $this->studentRepository = $studentRepository;
    }


    public function getAllStudents(): Collection
    {
        return $this->studentRepository->getAll();
    }

    public function getStudentPagination(int $page)
    {
        return $this->studentRepository->getStudentPagination($page);
    }

    public function createStudent(array $data): Student
    {
        $validator = Validator::make($data, [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            throw new \InvalidArgumentException($validator->errors()->first());
        }

        return $this->studentRepository->createStudent($data);
    }

    public function getStudentById(int $id)
    {
        return $this->studentRepository->getStudentById($id);
    }

    public function updateStudent(array $data, int $id): Student
    {
        return $this->studentRepository->updateStudent($data, $id);
    }

    public function deleteStudent(int $id)
    {
        $this->studentRepository->deleteStudent($id);
    }

}
