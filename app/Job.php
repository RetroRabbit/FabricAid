<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Status;

class Job extends Model
{
    public $timestamps = false;
    protected $table = 'Job';
    protected $primaryKey = 'Id';
    protected $fillable = ['Priority', 'DateCreated', 'PlannedStartDate', 'PlannedCompletionDate', 'PlannedHours', 'EstimatedCost', 'ActualHours', 'ActualCost', 'JobDetails'];

    public function scopeRequest($query)
    {
        return $query->where('StatusId', Status::inactive()->first()->Id);
    }

    public function scopeActive($query)
    {
        return $query->whereIn('StatusId', Status::active()->get()->pluck('Id')->toArray());
    }
}
