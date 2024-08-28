<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobApplications=JobApplication::with('job')->get();
        // dd($jobApplications);
        return view('admin.jobApplication.all',compact('jobApplications'));
    }



    /**
     * Display the specified resource.
     */
    public function show(JobApplication $jobApplication)
    {
        return view('admin.jobApplication.show',compact('jobApplication'));

    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $jobApplication)
    {
        $jobApplication->delete();
        return redirect()->route('jobApplication.index');
    }
}
