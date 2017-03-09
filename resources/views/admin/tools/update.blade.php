@extends('admin.layout')

@section('content')
<form method="post" class="input-form col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')

    {{ csrf_field() }}
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Code"><strong>Tool Code</strong></label>
        <input class="col-xs-12 col-sm-8" id="Code" name="Code" type="text" value="{{ $tool->Code }}" placeholder="Tool Code"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Name"><strong>Tool Name</strong></label>
        <input class="col-xs-12 col-sm-8" id="Name" name="Name" type="text" value="{{ $tool->Name }}" placeholder="Tool Name"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Description"><strong>Description</strong></label>
        <input class="col-xs-12 col-sm-8" id="Description" name="Description" type="text" value="{{ $tool->Description }}" placeholder="Description"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Machine"><strong>Machine</strong></label>
        <select class="col-xs-12 col-sm-8" id="Machine" name="Machine" value="{{ $tool->MachineId }}">
            <option value="">--- Please pick a machine ---</option>

            @foreach($machines as $machine)
            <option value="{{ $machine->Id }}">{{ $machine->Name }}</option>
            @endforeach
        </select>
    </div>
    <input class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-0" type="submit" name="Submit" value="Create" />
</form>
@endsection