<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\JobData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends BaseControler
{
    protected string $model = Category::class;
    protected array $relationModels = [JobData::class];
    protected array $relations = ['jobdata'];
    protected string $resourse = CategoryResource::class;
    public function __construct()
    {
        $this->columns = (new Category())->getFillable();
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'category' => 'required|string|unique:categories,category',
        ]);
        return parent::store($request);
    }

    public function update(Request $request, String $id): JsonResponse
    {
        $request->validate([
            'category' => 'required|string|unique:categories,category,' . $id,
        ]);
        return parent::update($request, $id);
    }
}
