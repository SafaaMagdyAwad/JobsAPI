<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Models\JobData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CompanyController extends BaseControler
{
    /**
     * Display a listing of the resource.
     */
    protected string $model = Company::class;
    protected array $relationModels = [JobData::class];
    protected array $relations = ['jobdata'];
    protected string $resourse = CompanyResource::class;

    public function __construct()
    {
        $this->columns = (new Company())->getFillable();
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'company' => 'required|string|unique:companies,company',
        ]);
        return parent::store($request);
    }

    public function update(Request $request, String $id): JsonResponse
    {
        $request->validate([
            'company' => 'required|string|unique:companies,company,',
            $id,
        ]);

        return parent::update($request, $id);
    }
}
