<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StudentService;

class StudentController extends Controller
{

    private $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = $this->studentService->getAllStudents();

        if($students->isEmpty()) {
            return response()->json(['message' => 'No students found'], 404);
        }

        return response()->json($students, 200);
    }

    public function getStudentPagination(int $page)
    {
        $students = $this->studentService->getStudentPagination($page);

        if($students->isEmpty()) {
            return response()->json(['message' => 'No students found'], 404);
        }

        return response()->json($students, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $student = $this->studentService->createStudent($request->all());

        } catch (\InvalidArgumentException $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }

        return response()->json($student, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try {
            $student = $this->studentService->getStudentById($id);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }

        return response()->json($student, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            $student = $this->studentService->updateStudent($request->all(), $id);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }

        return response()->json($student, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        try {
            $this->studentService->deleteStudent($id);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }

        return response()->json(['message' => 'Student deleted successfully'], 200);
    }
}
