<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;
    protected $table = 'Job';
    protected $primaryKey = 'Id';
    protected $fillable = ['Priority', 'DateCreated', 'PlannedStartDate', 'PlannedCompletionDate', 'PlannedHours', 'EstimatedCost', 'ActualHours', 'ActualCost', 'JobDetails'];

    public function scopeHistory($query)
    {
        return $query;
    }

    public function scopeRequest($query)
    {
        return $query;
    }

    public function scopeActive($query)
    {
        return $query;
    }
}
