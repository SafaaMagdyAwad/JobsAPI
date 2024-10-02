<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Resources\LocationResource;
use App\Models\JobData;
use App\Models\Location;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LocationController extends BaseControler
{
    protected string $model = Location::class;
    protected array $relationModels = [JobData::class];
    protected array $relations = ['jobdata'];
    protected string $resourse = LocationResource::class;


    public function __construct()
    {
        $this->columns = (new Location())->getFillable();
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'location' => 'required|string|unique:locations,location',
        ]);
        return parent::store($request);
    }

    public function update(Request $request, String $id): JsonResponse
    {
        $request->validate([
            'location' => 'required|string|unique:locations,location,' . $id,
        ]);

        return parent::update($request, $id);
    }
}
