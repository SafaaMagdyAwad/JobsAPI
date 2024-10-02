<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'website',
        'cv',
        'cover_litter',
        'job_id',
    ];
    public function jobdata(){
        return $this->belongsTo(JobData::class);
    }
}
