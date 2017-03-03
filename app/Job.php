<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Job';
    public $timestamps = false;
    protected $table = 'Job';
    protected $primaryKey = 'Id';
    protected $fillable = ['Priority', 'DateCreated', 'PlannedStartDate', 'PlannedCompletionDate', 'PlannedHours', 'EstimatedCost', 'ActualHours', 'ActualCost', 'JobDetails'];
}
