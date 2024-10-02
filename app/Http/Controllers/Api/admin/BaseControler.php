<?php

namespace App\Http\Controllers\Api\Admin;

use App\Common;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BaseControler extends Controller
{
    use Common;
    // when you find yourself write static code in construct
    // just assign the value to property direct

    // where to store files
    protected string $filesPath = "assets/images";
    // name of file in the frontend
    protected string $fileName = "image";
    protected string $model = '';
    protected string $resourse = '';

    //  if there is a relation with another model
    protected array $relationModels = [];
    protected array $relations = [];

    // columns to create and update
    protected array $columns = [];

    public function index(): JsonResponse
    {
        $model = new $this->model;
        if (!empty($this->relations)) {
            $model = $model::with($this->relations);
        }
        $data = $model->get();
        if ($data->count()) {
            return response()->json([
                "data" => $this->resourse::collection($data),
            ], 201);
        } else {
            return response()->json([
                "message" => "no data yet .",
            ], 203);
        }
    }


    public function store(Request $request): JsonResponse
    {
        // check if request is coming with file
        $data = $this->checkRequestForFiles($request);
        //no need for relation data
        $data = $this->model::create($data); //Car::create()
        return response()->json([
            'success' => 'Data Created Successfully',
            'data' => new $this->resourse($data),
        ], 200);
    }

    public function show(String $id): JsonResponse
    {
        $model = new $this->model;

        if (!empty($this->relations)) {
            $model = $model::with($this->relations);
        }
        $data = $model->findOrFail($id);
        return response()->json([
            'filesPath' => $this->filesPath,
            'data' => new $this->resourse($data),
        ], 200);
    }

    public function update(Request $request, String $id): JsonResponse
    {
        $data = $this->checkRequestForFiles($request);

        $this->model::where('id', $id)->update($data);
        return response()->json([
            'success' => 'data updated Successfully',
            'data' => new $this->resourse($data),
        ], 200);
    }
    public function destroy(String $id): JsonResponse
    {
        $model = new $this->model;

        if (!empty($this->relations)) {
            $model = $model::with($this->relations);
        }
        $data = $model->findOrFail($id);
        foreach ($this->relations as $relation) {
            if ($data[$relation]->count()) {
                return response()->json([
                    'error' => 'data cant be  Deleted ',
                ], 200);
            }
        }
        $data->delete();
        return response()->json([
            'success' => 'data Deleted Successfully',
        ], 200);
    }



    protected function checkRequestForFiles(Request $request)
    {
        $data = $request->only($this->columns);

        if ($request->hasFile($this->fileName)) {
            $fileName = $this->uploadFile($request[$this->fileName], $this->filesPath);
            $data[$this->fileName] = $fileName;
        }

        return $data;
    }
}
