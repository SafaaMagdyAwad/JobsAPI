<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        $companies= Company::all();
        return view('admin.company.all',compact('companies'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'company' => 'required|string',
        ]);
        Company::create($data);
        return redirect()->route('company.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('admin.company.show',compact('company'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $data=$request->validate([
            'company' => 'required|string',
        ]);
        $company->update($data);
        return redirect()->route('company.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index');

    }
}
