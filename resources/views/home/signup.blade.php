@extends('home.layout')

@section('content')
@include('layouts.errors')

<form method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="FirstName">First Name</label>
        <input id="FirstName" name="FirstName" type="text" value="{{ old('FirstName') }}" placeholder="Enter a first name..." />
    </div>
    
    <div class="form-group">
        <label for="LastName">Last Name</label>
        <input id="LastName" name="LastName" type="text" value="{{ old('LastName') }}" placeholder="Enter a lastname..." />
    </div>
    
    <div class="form-group">
        <label for="Email">Email</label>
        <input id="Email" name="Email" type="email" value="{{ old('Email') }}" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group">
        <label for="Password">Password</label>
        <input id="Password" name="Password" type="password" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group">
        <label for="Password">Password</label>
        <input id="Password" name="Password_confirmation" type="password" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group">
        <input id="Submit" name="Submit" type="submit" value="Submit" />
    </div>
</form>
@endsection