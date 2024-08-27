<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Common;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;

class JobController extends Controller
{
    use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs=Job::with(['company','category','location'])->get();
        return view('admin.job.all',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        $categories = Category::all();
        $locations = Location::all();
        return view('admin.job.create',compact(['companies','categories','locations']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data=$request->validate([
            'title' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'responsability' => 'required|string',
            'qualification' => 'required|string',
            'job_nature' => 'required|string',
            'vacancy' => 'required|integer',
            'salary_from' => 'required|decimal:0,2',
            'salary_to' => 'required|decimal:0,2|gt:salary_from',
            'date_line' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'location_id' => 'required|exists:locations,id',
            'company_id' => 'required|exists:companies,id',
        ]);
        $data['published'] = isset($request->published);
        $data['image'] = $this->uploadFile($request->image,'assets/images/jobs/');

        // dd($data);

        Job::create($data);

        return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $job=Job::with(['company','category','location'])->findOrFail($id);
        return view('admin.job.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $companies = Company::all();
        $categories = Category::all();
        $locations = Location::all();
        $job=Job::with(['company','category','location'])->findOrFail($id);
        return view('admin.job.edit',compact('job','companies','categories','locations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'title' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'old_image' => 'required|string',
            'responsability' => 'required|string',
            'qualification' => 'required|string',
            'job_nature' => 'required|string',
            'vacancy' => 'required|integer',
            'salary_from' => 'required|decimal:0,2',
            'salary_to' => 'required|decimal:0,2|gt:salary_from',
            'date_line' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'location_id' => 'required|exists:locations,id',
            'company_id' => 'required|exists:companies,id',
        ]);
        $data['published'] = isset($request->published);
        $data['image'] = isset($request->image)? $this->uploadFile($request->image,'assets/images/jobs/'): $request->old_image;

        $job= Job::findOrFail($id);
        $job->update($data);

        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job= Job::findOrFail($id);
        $job->delete();
        return redirect()->route('job.index');
    }
}
