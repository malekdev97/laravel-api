<?php

namespace App\Services;

use App\Repositories\EmployeeRepository;

class EmployeeService {

    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository) {
        $this->employeeRepository = $employeeRepository;
    }

    public function createEmployee(array $data) {

        return $this->createEmployee($data);
    }
}