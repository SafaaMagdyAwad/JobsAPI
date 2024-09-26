<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CompanyController extends BaseControler
{
     /**
     * Display a listing of the resource.
     */
  protected string $model = Company::class;

  public function __construct() {
      $this->columns = (new Company())->getFillable();
  }

  public function store(Request $request): JsonResponse
  {
    $request->validate([
        'company' => 'required|string',
    ]);
      return parent::store($request);
  }

  public function update(Request $request, String $id): JsonResponse
  {
    $request->validate([
        'company' => 'required|string',
    ]);

      return parent::update($request, $id);
  }

}
