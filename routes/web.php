<?php
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(12);

    return view('jobs.index', ['jobs' => $jobs]);
});

// ! Выносим СЮДА!
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

// ! Важно, в данном варианте запрос воспринимается как ('/jobs/{id}')\ Для срабатывания его нужно разместить выше.
// Route::get('/jobs/create', function () {
//     dd('This is JOBS CREATE page!');
// });

Route::post('/jobs', function () {
    request()->validate(
        [
            'title' => 'required|string|min:3|max:150',
            'salary' => 'required|string|min:4|max:100'
        ]
    );
    // dd(request()->all());
    // dd(request('title'));
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::view('/contacts', 'contacts');
