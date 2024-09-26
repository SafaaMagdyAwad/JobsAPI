<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends BaseControler
{
    protected string $model = Category::class;

    public function __construct() {
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
            'category' => 'required|string|unique:categories,category',
        ]);
        return parent::update($request, $id);
    }

}
