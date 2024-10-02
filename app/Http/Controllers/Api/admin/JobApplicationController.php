<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Resources\JobApplicationResource;
use App\Models\JobApplication;
use App\Models\JobData;

class JobApplicationController extends BaseControler
{
     /**
     * Display a listing of the resource.
     */
    protected string $resourse = JobApplicationResource::class;

     protected string $model = JobApplication::class;
  protected array $relationModels =[ JobData::class];
  protected array $relations = ['jobdata'];

  public function __construct() {
      $this->columns = (new JobApplication())->getFillable();
  }

}
