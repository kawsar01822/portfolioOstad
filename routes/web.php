<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/skill',[HomeController::class, 'skill'])->name('skill');
Route::get('/projects',[HomeController::class, 'projects'])->name('projects');
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
