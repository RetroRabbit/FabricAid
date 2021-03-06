@extends('admin.layout')

@section('content')
<form method="post" class="input-form col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')

    {{ csrf_field() }}
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="FirstName"><strong>First Name</strong></label>
        <input class="col-xs-12 col-sm-8" id="FirstName" name="FirstName" type="text" value="{{ old('FirstName') }}" placeholder="First Name"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="LastName"><strong>Last Name</strong></label>
        <input class="col-xs-12 col-sm-8" id="LastName" name="LastName" type="text" value="{{ old('LastName') }}" placeholder="Last Name"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Email"><strong>Email</strong></label>
        <input class="col-xs-12 col-sm-8" id="Email" name="Email" type="email" value="{{ old('Email') }}" placeholder="Email"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Password"><strong>Password</strong></label>
        <input class="col-xs-12 col-sm-8" id="Password" name="Password" type="text" value="{{ old('Password') }}" placeholder="Password"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Role"><strong>User Role</strong></label>
        <select class="col-xs-12 col-sm-8" id="Role" name="Role" value="{{ old('Role') }}">
            <option value="">--- Please pick a role ---</option>

            @foreach($roles as $role)
            <option value="{{ $role->Id }}">{{ $role->Name }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="ArtisanType"><strong>Artisan Type</strong></label>
        <select class="col-xs-12 col-sm-8" id="ArtisanType" name="ArtisanType" value="{{ old('ArtisanType') }}">
            <option value="">--- Please pick an artisan type ---</option>

            @foreach($artisanTypes as $artisanType)
            <option value="{{ $artisanType->Id }}">{{ $artisanType->Name }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group row">
        <input class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" id="Submit" name="Submit" type="submit" value="Create" />
    </div>
</form>
@endsection