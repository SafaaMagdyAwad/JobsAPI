<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Common;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JobController extends BaseControler
{
    protected string $filesPath = "assets/images/jobs";
    protected string $model = Job::class;
    protected array $relationModels = [Company::class,Category::class,Location::class];
    protected array $relations = ['company','category','location'];

    public function __construct() {
        $this->columns = (new Job())->getFillable();
    }


    public function store(Request $request): JsonResponse
    {

        // dd($request->all());
        $request->validate([
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
        return parent::store($request);
    }

    public function update(Request $request, String $id): JsonResponse
    {
        $request->validate([
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

        return parent::update($request, $id);
    }


}
