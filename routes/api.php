<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'findPostById']);
Route::post('/post/store', [PostController::class, 'store']);
Route::put('/post/update/{id}', [PostController::class, 'update']);
Route::delete('/post/delete/{id}', [PostController::class, 'destroy']);

Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/pagination/{page}', [StudentController::class, 'getStudentPagination']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::post('/student/store', [StudentController::class, 'store']);
Route::put('/student/update/{id}', [StudentController::class, 'update']);
Route::delete('/student/delete/{id}', [StudentController::class, 'destroy']);

