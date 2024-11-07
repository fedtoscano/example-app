<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {

    $jobs = Job::all();
    // dd($jobs[0]->salary);

    return view('home');
});

Route::get('/jobs', function (){
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id){
    $job = Job::find($id);
    return view('job', ['job'=> $job]);
});


Route::get('/contacts', function () {
    return view('contacts');
});
