<?php

use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\Admin\CompanyController;
use App\Http\Controllers\Api\Admin\JobApplicationController;
use App\Http\Controllers\Api\Admin\JobDataController;
use App\Http\Controllers\Api\Admin\LocationController;
use App\Http\Controllers\Api\Admin\TestimonialController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Public\PublicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//public functions
Route::get('/', [PublicController::class, 'index'])->name('public.index');
Route::get('category', [PublicController::class, 'category'])->name('public.category');
Route::post('contact', [PublicController::class, 'contactpost'])->name('public.contactpost');
Route::get('job_detail/{id}', [PublicController::class, 'job_detail'])->name('public.job_detail');
Route::get('job_list', [PublicController::class, 'job_list'])->name('public.job_list');
Route::get('jobs', [PublicController::class, 'jobs'])->name('public.jobs');
Route::get('testimonials', [PublicController::class, 'testimonial'])->name('public.testimonial');
Route::post('job_apply', [PublicController::class, 'job_apply'])->name('job_apply');
Route::put('job_like/{job}', [PublicController::class, 'like_job'])->name('job.like');
Route::get('categoryJobs/{category}', [PublicController::class, 'categoryJobs'])->name('categoryJobs');
Route::post('search', [PublicController::class, 'search'])->name('search');
Route::post('newsLetter', [PublicController::class, 'newsLetter'])->name('newsLetter');
//authontication
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
    //admin functions
    Route::apiResource('jobdata', JobDataController::class);
    Route::apiResource('testimonial', TestimonialController::class);
    Route::apiResource('location', LocationController::class);
    Route::apiResource('company', CompanyController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('jobapplication', JobApplicationController::class)->only(['index', 'show', 'destroy']);
    Route::get('/user', function (Request $request) {
        return $request->user();  //returns the authonticated user
    });
});
