<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function __construct() {
        // no-argument constructor
    }

    public function getAllEmployees() {
        return Employee::all();
    }
}
