<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends BaseControler
{
    protected string $model = Category::class;

    public function __construct() {
        $this->columns = (new Category())->getFillable();
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category' => 'required|string|unique:categories,category',
        ]);
        return parent::store($request);
    }

    public function update(Request $request, String $id): RedirectResponse
    {
        $request->validate([
            'category' => 'required|string|unique:categories,category',
        ]);
        return parent::update($request, $id);
    }

}
