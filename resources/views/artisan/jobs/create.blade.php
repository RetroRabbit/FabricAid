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
        <label class="col-xs-12 col-sm-4" for="Company"><strong>Company</strong></label>
        <select class="col-xs-12 col-sm-8" id="Company" name="Company" value="{{ old('Company') }}">
            <option value="">--- Please pick a company ---</option>

            @foreach($companies as $company)
            <option value="{{ $company->Id }}">{{ $company->Name }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Area"><strong>Area</strong></label>
        <select class="col-xs-12 col-sm-8" id="Area" name="Area" value="{{ old('Area') }}">
            <option value="">--- Please pick a area ---</option>

            @foreach($areas as $area)
            <option value="{{ $area->Id }}">{{ $area->Name }}</option>
            @endforeach
        </select>
    </div>    
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Machine"><strong>Machine</strong></label>
        <select class="col-xs-12 col-sm-8" id="Machine" name="Machine" value="{{ old('Machine') }}">
            <option value="">--- Please pick a machine ---</option>

            @foreach($machines as $machine)
            <option value="{{ $machine->Id }}">{{ $machine->Name }}</option>
            @endforeach
        </select>
    </div>    
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Tool"><strong>Tool</strong></label>
        <select class="col-xs-12 col-sm-8" id="Tool" name="Tool" value="{{ old('Tool') }}">
            <option value="">--- Please pick a tool ---</option>

            @foreach($tools as $tool)
            <option value="{{ $tool->Id }}">{{ $tool->Name }}</option>
            @endforeach
        </select>
    </div>   
    
    <div class="form-group row">
        <input class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" id="Submit" name="Submit" type="submit" value="Submit" />
    </div>
</form>
@endsection