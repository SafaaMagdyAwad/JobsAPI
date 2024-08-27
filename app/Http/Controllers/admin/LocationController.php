<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations= Location::all();
        return view('admin.location.all',compact('locations'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'location' => 'required|string',
        ]);
        Location::create($data);
        return redirect()->route('location.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view('admin.location.show',compact('location'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('admin.location.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $data=$request->validate([
            'location' => 'required|string',
        ]);
        $location->update($data);
        return redirect()->route('location.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('location.index');

    }
}
