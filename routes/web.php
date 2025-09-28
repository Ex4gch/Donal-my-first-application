<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Employer;
use App\Models\Tag;
use SweetAlert2\Laravel\Swal;
use App\Http\Controllers\JobController;

Route::get('/', function () {
return view('home');
});

Route::resource('jobs', JobController::class);

