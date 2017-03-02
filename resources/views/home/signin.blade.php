@extends('home.layout')

@section('content')
@include('layouts.errors')

<form method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="Email">Email</label>
        <input id="Email" name="Email" type="email" value="{{ old('Email') }}" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group">
        <label for="Password">Password</label>
        <input id="Password" name="Password" type="password" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group">
        <input id="Submit" name="Submit" type="submit" value="Submit" />
    </div>
</form>
@endsection