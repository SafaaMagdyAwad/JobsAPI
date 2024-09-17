<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
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

    public function index(): View
    {
        $model = new $this->model;
        if (!empty($this->relations)) {
            $model = $model::with($this->relations);
        }
        $data = $model->get();

        return view('admin.' . $this->getViewName('index'), compact('data'));
    }

    public function create(): View
    {
        $relationData=$this->getRelationData();
        // dd($relationData);
        return view('admin.' . $this->getViewName('create'), compact('relationData'));
    }

    public function store(Request $request): RedirectResponse
    {
        // check if request is coming with file
        $data = $this->checkRequestForFiles($request);
        //no need for relation data
        $this->model::create($data); //Car::create()
        return redirect()->route($this->getViewName('index')); ///lowerCase modelName.index   ex car.index
    }
    public function show(String $id): View
    {
        $model = new $this->model;

        if (!empty($this->relations)) {
            $model = $model::with($this->relations);
        }
        $data = $model->findOrFail($id);
        return view('admin.' . $this->getViewName('show'), compact('data'));
    }
    public function edit(String $id): View
    {
        $data = $this->model::findOrFail($id);
        $relationData=$this->getRelationData();


        return view('admin.' . $this->getViewName('edit'), compact('data', 'relationData'));
    }
    public function update(Request $request, String $id): RedirectResponse
    {
        $data = $this->checkRequestForFiles($request);

        $this->model::where('id', $id)->update($data);
        return redirect()->route($this->getViewName('index'));
    }
    public function destroy(String $id): RedirectResponse
    {
        $this->model::where('id', $id)->delete();
        return redirect()->route($this->getViewName('index'));
    }

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
