<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Employer;
use App\Models\Tag;
use SweetAlert2\Laravel\Swal;

Route::get('/', function () {
return view('home');
});

Route::get('/jobs', function () {
return view('jobs.index', [ // Changed
'jobs' => Job::with('employer', 'tags')->latest()->paginate(3)
]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create',
    ['employers' => Employer::all(),
    'tags' => Tag::all()
    ]);
});

Route::get('/jobs/{job}', function (Job $job) {
return view('jobs.show', ['job' => $job]); // Changed
});

Route::get('/jobs/{job}/edit', function (\App\Models\Job $job) {
return view('jobs.edit', ['job' => $job]);
});
// Update a Job
Route::patch('/jobs/{job}', function (\App\Models\Job $job) {
// validation
request()->validate([
'title' => ['required', 'min:3'],
'salary' => ['required']
]);
// update
$job->update([
'title' => request('title'),
'salary' => request('salary'),
]);
// redirect
return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{job}', function (\App\Models\Job $job) {
    $job->delete();
    return redirect('/jobs');
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job = Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    Swal::fire([
        'title' => 'Job Created Succesfully',
        'text' => 'This is a simple alert using SweetAlert2',
        'icon' => 'success',
        'confirmButtonText' => 'Cool'
    ]);
    return redirect('/jobs');
});

