<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Services\EmployeeService;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    private $employeeService;
    public function __construct(EmployeeService $employeeService) {
        $this->employeeService = $employeeService;
    }

    public function getAllEmployees() {
        return Employee::all();
    }

    public function createEmployee(Request $request) {
        DB::beginTransaction();
        try {
            $employee = $this->employeeService->createEmployee($request->all());
            DB::commit();
            return response()->json([
                'message' => 'Employee created successfully',
                'post' => $employee
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Employee creation failed',
                'error' => $e->getMessage()
            ], 400);
        }
    }

}
