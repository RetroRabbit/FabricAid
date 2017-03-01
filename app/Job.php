<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;
    protected $fillable = ['Priority', 'DateCreated', 'PlannedStartDate', 'PlannedCompletionDate', 'PlannedHours', 'EstimatedCost', 'ActualHours', 'ActualCost', 'JobDetails'];
}
