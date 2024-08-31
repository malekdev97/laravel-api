<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('app');
});

Route::get('/jobs', function() {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => "Director",
                'salary' => 500000
            ],
            [
                'id' => 2,
                'title' => "Programmer",
                'salary' => 10000
            ],
            [
                'id' => 3,
                'title' => "Designer",
                'salary' => 40000
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function($id) {

    $jobs = [
            [
                'id' => 1,
                'title' => "Director",
                'salary' => 500000
            ],
            [
                'id' => 2,
                'title' => "Programmer",
                'salary' => 10000
            ],
            [
                'id' => 3,
                'title' => "Designer",
                'salary' => 40000
            ]
    ];

    // \Illuminate\Support\Arr::first($jobs, function($jobs) use ($id ) {
    //     return $jobs['id'] == $id;
    // });

    // Php 8.x new feature
    $job = \Illuminate\Support\Arr::first($jobs, fn($jobs) => $jobs['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
