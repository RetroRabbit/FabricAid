<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function scopeDisplayModels($query)
    {
        $collection = $query->get();

        foreach ($collection as $key => $value)
            $value = $value->displayModel();

        return $collection;
    }

    public function displayModel()
    {
        dd(User::where('Id', $this->CreatedBy)->get()->select(['FirstName', 'LastName']));
        return 
        [
            'Id'                    => $this->Id,

            'Priority'              => $this->Priority,
            'Company'               => Company::find($this->CompanyId)->first()->Name,
            'Area'                  => Area::find($this->AreaId)->first()->Name,
            'Machine'               => Machine::find($this->MachineId)->first()->Name,
            'Tool'                  => Tool::find($this->ToolId)->first()->Name,
            'Details'               => $this->JobDetails,   
            
            'CreatedBy'             => implode(User::find($this->CreatedBy)->first()->pluck('FirstName', 'LastName')),
            'DateCreated'           => $this->DateCreated,
            'Status'                => Status::find($this->StatusId)->first()->Name,

            'PlannedStartDate'      => $this->PlannedStartDate,
            'PlannedCompletionDate' => $this->PlannedCompletionDate,
            'PlannedHours'          => $this->PlannedHours,
            'EstimatedCost'         => $this->EstimatedCost,
            'Comments'              => $this->Comments,
            'FocusArea'             => $this->FocusAreaId ? FocusArea::find($this->FocusAreaId)->first()->Name : '',

            'ActualHours'           => $this->ActualHours,
            'ActualCost'            => $this->ActualCost,
            'AssignedBy'            => $this->AssignedBy ? implode(User::find($this->AssignedBy)->first()->pluck('FirstName', 'LastName')) : '',
            'AssignedTo'            => $this->AssignedTo ? implode(User::find($this->AssignedTo)->first()->pluck('FirstName', 'LastName')) : '',
            'TypeId'                => $this->TypeId ? Type::find($this->TypeId)->first()->Name : '',
            'TemplateId'            => $this->TemplateId ? Template::find($this->TemplateId)->first()->Name : '',
        ];
    }

    public function editModel()
    {
        return 
        [
            'Id'                    => $this->Id,

            'Priority'              => $this->Priority,
            'Company'               => Company::find($this->CompanyId)->first(),
            'Area'                  => Area::find($this->AreaId)->first(),
            'Machine'               => Machine::find($this->MachineId)->first(),
            'Tool'                  => Tool::find($this->ToolId)->first(),
            'Details'               => $this->JobDetails,   
            
            'CreatedBy'             => User::find($this->CreatedBy)->first(),
            'DateCreated'           => $this->DateCreated,
            'Status'                => Status::find($this->StatusId)->first(),

            'PlannedStartDate'      => $this->PlannedStartDate,
            'PlannedCompletionDate' => $this->PlannedCompletionDate,
            'PlannedHours'          => $this->PlannedHours,
            'EstimatedCost'         => $this->EstimatedCost,
            'Comments'              => $this->Comments,
            'FocusArea'             => $this->FocusAreaId ? FocusArea::find($this->FocusAreaId)->first() : '',

            'ActualHours'           => $this->ActualHours,
            'ActualCost'            => $this->ActualCost,
            'AssignedBy'            => $this->AssignedBy ? User::find($this->AssignedBy)->first() : '',
            'AssignedTo'            => $this->AssignedTo ? User::find($this->AssignedTo)->first() : '',
            'TypeId'                => $this->TypeId ? Type::find($this->TypeId)->first() : '',
            'TemplateId'            => $this->TemplateId ? Template::find($this->TemplateId)->first() : '',
        ];
    }

    public function fillForeignKeys()
    {
        return 
        [
            'Id'                    => $this->Id,

            'Priority'              => $this->Priority,
            'Company'               => Company::find($this->CompanyId)->first(),
            'Area'                  => Area::find($this->AreaId)->first(),
            'Machine'               => Machine::find($this->MachineId)->first(),
            'Tool'                  => Tool::find($this->ToolId)->first(),
            'Details'               => $this->JobDetails,   
            
            'CreatedBy'             => User::find($this->CreatedBy)->first(),
            'DateCreated'           => $this->DateCreated,
            'Status'                => Status::find($this->StatusId)->first(),

            'PlannedStartDate'      => $this->PlannedStartDate,
            'PlannedCompletionDate' => $this->PlannedCompletionDate,
            'PlannedHours'          => $this->PlannedHours,
            'EstimatedCost'         => $this->EstimatedCost,
            'Comments'              => $this->Comments,
            'FocusArea'             => $this->FocusAreaId ? FocusArea::find($this->FocusAreaId)->first() : '',

            'ActualHours'           => $this->ActualHours,
            'ActualCost'            => $this->ActualCost,
            'AssignedBy'            => $this->AssignedBy ? User::find($this->AssignedBy)->first() : '',
            'AssignedTo'            => $this->AssignedTo ? User::find($this->AssignedTo)->first() : '',
            'TypeId'                => $this->TypeId ? Type::find($this->TypeId)->first() : '',
            'TemplateId'            => $this->TemplateId ? Template::find($this->TemplateId)->first() : '',
        ];
    }
}
