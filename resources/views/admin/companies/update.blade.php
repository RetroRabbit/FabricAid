@extends('admin.layout')

@section('content') 
<div class="container" style="margin-top: 100px;">
    <form class="row" method="post"> 
        {{ csrf_field() }} 

        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 form-group">
            @include('layouts.errors')
            
            <div class="row form-group">
                <label for="Code" class="col-xs-5"><strong>Company Code</strong></label>
                <input class="col-xs-7" id="Code" name="Code" type="text" value="{{ $company->Code }}" placeholder="JHB-S1"/> 
            </div>
            
            <div class="row form-group">
                <label for="Name" class="col-xs-5"><strong>Company Name</strong></label>
                <input class="col-xs-7" id="Name" name="Name" type="text" value="{{ $company->Name }}" placeholder="Johanesburg Site 1"/> 
            </div>
            
            <div class="row form-group">
                <label for="Description" class="col-xs-5"><strong>Company Description</strong></label>
                <input class="col-xs-7" id="Description" name="Description" type="text" value="{{ $company->Description }}" placeholder="Description..."/> 
            </div>
            
            <div class="row form-group">
                <label for="Logo" class="col-xs-5"><strong>Company Logo</strong></label>
                <input class="col-xs-7" id="Logo" name="Logo" type="file" value="{{ $company->Logo }}"> 
            </div>
            <input class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-0" type="submit" name="Submit" value="Update" /> 
        <div> 
    </form> 
</div> 
@endsection