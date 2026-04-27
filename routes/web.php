<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/resume', function () {
    return view('pages.resume');
})->name('resume');


Route::get('/hire', function () {
    return view('pages.hire');
})->name('hire');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');
Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');