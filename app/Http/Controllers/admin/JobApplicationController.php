<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApplication;

class JobApplicationController extends BaseControler
{
     /**
     * Display a listing of the resource.
     */
  protected string $model = JobApplication::class;
  protected array $relationModels =[ Job::class];
  protected array $relations = ['job'];

  public function __construct() {
      $this->columns = (new JobApplication())->getFillable();
  }

}
