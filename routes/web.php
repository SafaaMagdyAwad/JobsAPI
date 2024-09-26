<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\JobApplicationController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Public\PublicController;
use Illuminate\Support\Facades\Route;


Route::prefix('api')->group(function () {
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

    //admin functions
    Route::resource('job', JobController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('location', LocationController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('jobapplication', JobApplicationController::class)->only(['index', 'show', 'destroy']);



    //cmd php artisan tinker show the out in the termina



});
