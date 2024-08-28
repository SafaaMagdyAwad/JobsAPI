<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'description',
        'responsability',
        'qualification',
        'job_nature',
        'salary_from',
        'salary_to',
        'date_line',
        'published',
        'like',
        'vacancy',
        'category_id',
        'location_id',
        'company_id',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function jobApplication(){
        return $this->hasMany(JobApplication::class);
    }
}
