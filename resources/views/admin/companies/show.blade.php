@extends('admin.layout')

@section('content') 
<div class="container" style="margin-top: 100px;">
    <div id="table-header" class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 form-group"> 
            <p class="col-xs-2"><strong>#</strong></p>
            <p class="col-xs-2"><strong>Company Code</strong></p>
            <p class="col-xs-2"><strong>Company Name</strong></p>
            <p class="col-xs-2"><strong>Company Description</strong></p>
            <p class="col-xs-2"><strong>Company Logo</strong></p>
        </div> 
    </div> 
    
    <div id="table-body" class="row"> 
        @for($i = 0; $i < count($companies); ++$i) 
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 form-group"> 
            <label class="col-xs-2">{{ $i + 1 }}</label> 
            <input class="col-xs-2" name="Code" type="text" value="{{ $companies[$i]->Code }}" placeholder="JHB-S1"/> 
            <input class="col-xs-2" name="Name" type="text" value="{{ $companies[$i]->Name }}" placeholder="Johanesburg Site 1"/> 
            <input class="col-xs-2" name="Description" type="text" value="{{ $companies[$i]->Description }}" placeholder="Description..."/> 
            <input class="col-xs-2" name="Logo" type="file" value="{{ $companies[$i]->Logo }}" /> 
            <a class="col-xs-1" href="{{ route('admin-companies-update', $companies[$i]->Id) }}"><i class="fa fa-upload" aria-hidden="true"></i></a> 
            <a class="col-xs-1" href="{{ route('admin-companies-delete', $companies[$i]->Id) }}"><i class="fa fa-ban" aria-hidden="true"></i></a> 
        </div> 
        @endfor 
    </div> 

    <div id="table-footer" class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 form-group"> 
            <label class="col-xs-2">New</label> 
            <input class="col-xs-2" name="Code" type="text" value="{{ old('Code') }}" placeholder="JHB-S1"/> 
            <input class="col-xs-2" name="Name" type="text" value="{{ old('Name') }}" placeholder="Johanesburg Site 1"/> 
            <input class="col-xs-2" name="Description" type="text" value="{{ old('Description') }}" placeholder="Description..."/> 
            <input class="col-xs-2" name="Logo" type="file" value="{{ old('Logo') }}"> 
            <input class="col-xs-2" type="submit" name="Submit" value="Create" /> 
        <div> 
    </div> 
</div> 
@endsection