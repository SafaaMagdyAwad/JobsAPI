<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
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

        return response()->json([
            'filesPath'=>$this->filesPath,
            'data' => $data,
        ], 200);
    }

    public function create(): JsonResponse
    {
        $relationData=$this->getRelationData();
        // dd($relationData);
        return response()->json([
            'relationData' => $relationData,
            'filesPath'=>$this->filesPath,

        ], 200);
    }

    public function store(Request $request): JsonResponse
    {
        // check if request is coming with file
        $data = $this->checkRequestForFiles($request);
        //no need for relation data
        $this->model::create($data); //Car::create()
        return response()->json([
            'success' => 'Data Created Successfully',
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
            'filesPath'=>$this->filesPath,
            'data' => $data,
        ], 200);
    }
    public function edit(String $id): JsonResponse
    {
        $data = $this->model::findOrFail($id);
        $relationData=$this->getRelationData();
        return response()->json([
            'filesPath'=>$this->filesPath,
            'data' => $data,
            'relationData' => $relationData,
        ], 200);

    }
    public function update(Request $request, String $id): JsonResponse
    {
        $data = $this->checkRequestForFiles($request);

        $this->model::where('id', $id)->update($data);return response()->json([
            'success' => 'data updated Successfully',
        ], 200);
    }
    public function destroy(String $id): JsonResponse
    {
        $this->model::where('id', $id)->delete();
        return response()->json([
            'success' => 'data Deleted Successfully',
        ], 200);    }

    protected function getViewName($action)
    {
        return strtolower(class_basename($this->model)) . '.' . $action;
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
    public function getRelationData(){
        $relationData = [];
        // dd($this->relationModels);
        foreach($this->relationModels as $relationModel){
            if ($relationModel !== '') {
                $relationData[strtolower(class_basename($relationModel))] = $relationModel::get();
            }
        }
        // dd($relationData);

        return $relationData;
    }
}
