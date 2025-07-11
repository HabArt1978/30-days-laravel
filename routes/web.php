<?php

use Illuminate\Support\Facades\Route;

$jobs = [
    [
        'id' => 1,
        'title' => 'Director',
        'salary' => '$50,000'
    ],
    [
        'id' => 2,
        'title' => 'Programmer',
        'salary' => '$10,000'
    ],
    [
        'id' => 3,
        'title' => 'Teacher',
        'salary' => '$40,000'
    ],
];

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {

    // Реализация без стрелочной функции
    // Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] === $id;
    // });

    $job = Arr::first($jobs, fn($job) => $job['id'] === (int) $id);

    return view('job', ['job' => $job]);

});

Route::view('/contacts', 'contacts');
