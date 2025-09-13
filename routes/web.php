<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contacts', 'contacts');

Route::resource('jobs', JobController::class);

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/{job}', [JobController::class, 'show']);
// Route::post('/jobs', [JobController::class, 'store']);
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
// Route::patch('/jobs/{id}', [JobController::class, 'update']);
// Route::delete('/jobs/{id}', [JobController::class, 'destroy']);

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });






