<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestimonialController extends BaseControler
{
    protected string $filesPath = "assets/images/testimonials";
    protected string $model = Testimonial::class;
    protected string $resourse = TestimonialResource::class;


    public function __construct()
    {
        $this->columns = (new Testimonial())->getFillable();
    }


    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'job' => 'required|string',
            'message' => 'required|string',
        ]);
        return parent::store($request);
    }

    public function update(Request $request, String $id): JsonResponse
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'old_image' => 'required|string',
            'job' => 'required|string',
            'message' => 'required|string',
        ]);

        return parent::update($request, $id);
    }
}
