<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LocationController extends BaseControler
{
    protected string $model = Location::class;

    public function __construct() {
        $this->columns = (new Location())->getFillable();
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'location' => 'required|string',
        ]);
        return parent::store($request);
    }

    public function update(Request $request, String $id): RedirectResponse
    {
        $request->validate([
            'location' => 'required|string',
        ]);

        return parent::update($request, $id);
    }
}
