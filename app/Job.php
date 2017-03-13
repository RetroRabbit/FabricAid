<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Status;
use App\Company;
use App\Area;
use App\Machine;
use App\Tool;

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

    public function fillForeignKeys()
    {
        return 
        [
            'DateCreated'   => $this->DateCreated,
            'Priority'   => $this->Priority,
            'Company'       => Company::find($this->CompanyId)->Name,
            'Area'          => Area::find($this->AreaId)->Name,
            'Machine'       => Machine::find($this->MachineId)->Name,
            'Tool'          => Tool::find($this->ToolId)->Name,
            'DateCreated'   => $this->DateCreated,
            'Status'        => Status::find($this->StatusId)->Name
        ];
    }
}
