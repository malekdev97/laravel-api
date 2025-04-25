<?php
namespace App\Repositories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;

class EmployeeRepository {

    public function createEmployee(array $data):Employee {

        return Employee::create($data);
    }
}