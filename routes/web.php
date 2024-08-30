<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\JobApplicationController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Public\PublicController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


//public functions
Route::get('index',[PublicController::class,'index'])->name('public.index');
Route::get('about',[PublicController::class,'about'])->name('public.about');
Route::get('category',[PublicController::class,'category'])->name('public.category');
Route::get('contact',[PublicController::class,'contact'])->name('public.contact');
Route::post('contact',[PublicController::class,'contactpost'])->name('public.contactpost');
Route::get('job_detail/{id}',[PublicController::class,'job_detail'])->name('public.job_detail');
Route::get('job_list',[PublicController::class,'job_list'])->name('public.job_list');
Route::get('jobs',[PublicController::class,'jobs'])->name('public.jobs');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('public.testimonial');
Route::post('job_apply',[PublicController::class,'job_apply'])->name('job_apply');
Route::put('job_like/{job}',[PublicController::class,'like_job'])->name('job.like');
Route::get('categoryJobs/{category}',[PublicController::class,'categoryJobs'])->name('categoryJobs');
Route::post('search',[PublicController::class,'search'])->name('search');



//admin functions
//mcamara
Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::resource('job',JobController::class)->middleware('verified');
        Route::resource('testimonials',TestimonialController::class)->middleware('verified');
        Route::resource('location',LocationController::class)->middleware('verified');
        Route::resource('company',CompanyController::class)->middleware('verified');
        Route::resource('categories',CategoryController::class)->middleware('verified');
        Route::resource('jobApplication',JobApplicationController::class)->middleware('verified');
   });



        //cmd php artisan tinker show the out in the termina


        // laravel login
        //multi language

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

Route::get('/auth/{social}/redirect',[SocialController::class,'redirect'])->name('social_link');
Route::get('/auth/{social}/callback',[SocialController::class,'callback']);


//additional
//qr code
Route::get('/barcode', [BarcodeController::class, 'generateCode']);

// messages
Route::get('/getMessage', [MessageController::class, 'index']);
Route::post('/message', [MessageController::class, 'store']);
