<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LocationController extends BaseControler
{
    protected string $model = Location::class;

    public function __construct() {
        $this->columns = (new Location())->getFillable();
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'location' => 'required|string',
        ]);
        return parent::store($request);
    }

    public function update(Request $request, String $id): JsonResponse
    {
        $request->validate([
            'location' => 'required|string',
        ]);

        return parent::update($request, $id);
    }
}
