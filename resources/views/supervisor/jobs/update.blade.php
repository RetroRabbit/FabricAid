@extends('supervisor.layout')

@section('content')
<form method="post" class="input-form col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')
    
    {{ csrf_field() }}

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Priority">Priority</label>
        <p class="col-xs-12 col-sm-8" id="Priority" name="Priority">{{ $job['Priority'] }}</p>
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Company"><strong>Company</strong></label>
        <p class="col-xs-12 col-sm-8" id="Company" name="Company">{{ $job['Company']->Name }}</p>
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Area"><strong>Area</strong></label>
        <p class="col-xs-12 col-sm-8" id="Area" name="Area" value=>{{ $job['Area']->Name }}</p>
    </div>    
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Machine"><strong>Machine</strong></label>
        <p class="col-xs-12 col-sm-8" id="Machine" name="Machine" value=>{{ $job['Machine']->Name }}</p>
    </div>    
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Tool"><strong>Tool</strong></label>
        <p class="col-xs-12 col-sm-8" id="Tool" name="Tool" value=>{{ $job['Tool']->Name }}</p>
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Details"><strong>Details</strong></label>
        <p class="col-xs-12 col-sm-8" id="Details" name="Details">{{ $job['Details'] }}</p>
    </div>
    
    <hr />

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Status"><strong>Status</strong></label>
        <select class="col-xs-12 col-sm-8" id="Status" name="Status" value="{{ $job['Status']->Id}}">
            @foreach($statuses as $status)
            <option value="{{ $status->Name }}">{{ $status->Name }}</option>
            @endforeach
        </select>        
    </div>

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="PlannedStartDate"><strong>Planned Start Date</strong></label>
        <input class="col-xs-12 col-sm-8" type="date" id="PlannedStartDate" name="PlannedStartDate" value="{{ $job['PlannedStartDate'] }}" /> 
    </div>

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="PlannedCompletionDate"><strong>Planned Completion Date</strong></label>
        <input class="col-xs-12 col-sm-8" type="date" id="PlannedCompletionDate" name="PlannedCompletionDate" value="{{ $job['PlannedCompletionDate'] }}" /> 
    </div>

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="PlannedHours"><strong>Planned Hours</strong></label>
        <input class="col-xs-12 col-sm-8" type="number" min=0 id="PlannedHours" name="PlannedHours" value="{{ $job['PlannedHours'] }}" /> 
    </div>

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="EstimatedCost"><strong>Estimated Cost</strong></label>
        <input class="col-xs-12 col-sm-8" type="number" min=0  step="0.01" id="EstimatedCost" name="EstimatedCost" value="{{ $job['EstimatedCost'] }}" /> 
    </div>

    <div class="form-group row">
        <input class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" id="Submit" name="Submit" type="submit" value="Submit" />
    </div>
</form>
@endsection