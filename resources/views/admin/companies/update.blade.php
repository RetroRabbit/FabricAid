@extends('admin.layout')

@section('content')
<form method="post" class="input-form col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')

    {{ csrf_field() }}
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Code"><strong>Company Code</strong></label>
        <input class="col-xs-12 col-sm-8" id="Code" name="Code" type="text" value="{{ $company->Code }}" placeholder="Company Code"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Name"><strong>Company Name</strong></label>
        <input class="col-xs-12 col-sm-8" id="Name" name="Name" type="text" value="{{ $company->Name }}" placeholder="Company Name"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Description"><strong>Company Description</strong></label>
        <input class="col-xs-12 col-sm-8" id="Description" name="Description" type="text" value="{{ $company->Description }}" placeholder="Company Description"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Logo"><strong>Company Logo</strong></label>
        <input class="col-xs-12 col-sm-8" id="Logo" name="Logo" type="file" value="{{ $company->Logo }}"> 
    </div>
    
    <div class="form-group row">
        <input class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" id="Submit" name="Submit" type="submit" value="Update" />
    </div>
</form>
@endsection