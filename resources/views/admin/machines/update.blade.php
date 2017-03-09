@extends('admin.layout')

@section('content')
<form method="post" class="input-form col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')

    {{ csrf_field() }}
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Code"><strong>Machine Code</strong></label>
        <input class="col-xs-12 col-sm-8" id="Code" name="Code" type="text" value="{{ $machine->Code }}" placeholder="Machine Code"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Name"><strong>Machine Name</strong></label>
        <input class="col-xs-12 col-sm-8" id="Name" name="Name" type="text" value="{{ $machine->Name }}" placeholder="Machine Name"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Description"><strong>Description</strong></label>
        <input class="col-xs-12 col-sm-8" id="Description" name="Description" type="text" value="{{ $machine->Description }}" placeholder="Description"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Area"><strong>Area</strong></label>
        <select class="col-xs-12 col-sm-8" id="Area" name="Area" value="{{ $machine->AreaId }}">
            <option value="">--- Please pick a area ---</option>

            @foreach($areas as $area)
            <option value="{{ $area->Id }}">{{ $area->Name }}</option>
            @endforeach
        </select>
    </div>
    <input class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-0" type="submit" name="Submit" value="Create" />
</form>
@endsection