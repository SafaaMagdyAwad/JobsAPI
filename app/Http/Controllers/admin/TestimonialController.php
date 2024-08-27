<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Common;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials=Testimonial::all();
        return view('admin.testimonial.all',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'job' => 'required|string',
            'message' => 'required|string',
        ]);
        $data['image']=$this->uploadFile($request->image,"assets/images/testimonials/");

        Testimonial::create($data);
        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonial.show',compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit',compact('testimonial'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $data=$request->validate([
            'name' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'job' => 'required|string',
            'message' => 'required|string',
        ]);
        $data['image']=isset($request->image)?$this->uploadFile($request->image,"assets/images/testimonials/"):$request->old_image;

        $testimonial->update($data);
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index');
    }
}
