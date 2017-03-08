@extends('home.layout')

@section('content')
@include('layouts.errors')

<form method="post" class="input-form col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    {{ csrf_field() }}

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="FirstName">First Name</label>
        <input class="col-xs-12 col-sm-8" id="FirstName" name="FirstName" type="text" value="{{ old('FirstName') }}" placeholder="Enter a first name..." />
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="LastName">Last Name</label>
        <input class="col-xs-12 col-sm-8" id="LastName" name="LastName" type="text" value="{{ old('LastName') }}" placeholder="Enter a lastname..." />
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Email">Email</label>
        <input class="col-xs-12 col-sm-8" id="Email" name="Email" type="email" value="{{ old('Email') }}" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Password">Password</label>
        <input class="col-xs-12 col-sm-8" id="Password" name="Password" type="password" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Password">Password</label>
        <input class="col-xs-12 col-sm-8" id="Password" name="Password_confirmation" type="password" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group row">
        <input class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" id="Submit" name="Submit" type="submit" value="Submit" />
    </div>
</form>
@endsection