@extends('artisan.layout')

@section('content')
<form method="post" class="input-form col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')
    
    {{ csrf_field() }}

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Priority">Priority</label>
        <input class="col-xs-12 col-sm-8" id="Priority" name="Priority" type="number" min="0" value="{{ old('Priority') }}" placeholder="Priority" />
    </div>

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="PlannedStartDate">Planned Start Date</label>
        <input class="col-xs-12 col-sm-8" id="PlannedStartDate" name="PlannedStartDate" type="date"  value="{{ old('PlannedStartDate') }}" />
    </div>

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="PlannedCompletionDate">Planned Completion Date</label>
        <input class="col-xs-12 col-sm-8" id="PlannedCompletionDate" name="PlannedCompletionDate" type="date"  value="{{ old('PlannedCompletionDate') }}" />
    </div>

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="PlannedHours">PlannedHours</label>
        <input class="col-xs-12 col-sm-8" id="PlannedHours" name="PlannedHours" type="number" min="0" value="{{ old('PlannedHours') }}" placeholder="Planned Hours" />
    </div>

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="EstimatedCost">EstimatedCost</label>
        <input class="col-xs-12 col-sm-8" id="EstimatedCost" name="EstimatedCost" type="number" min="0" value="{{ old('EstimatedCost') }}" placeholder="Estimated Cost" />
    </div>

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Prority">Prority</label>
        <input class="col-xs-12 col-sm-8" id="Prority" name="Prority" type="number" min="0" value="{{ old('Prority') }}" placeholder="Priority" />
    </div>
    
    <div class="form-group row">
        <input class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" id="Submit" name="Submit" type="submit" value="Submit" />
    </div>
</form>
@endsection