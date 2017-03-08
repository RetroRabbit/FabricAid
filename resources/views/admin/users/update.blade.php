@extends('admin.layout')

@section('content')
<form method="post" class="input-form col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')

    {{ csrf_field() }}
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="FirstName"><strong>First Name</strong></label>
        <input class="col-xs-12 col-sm-8" id="FirstName" name="FirstName" type="text" value="{{ $user->FirstName }}" placeholder="First Name"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="LastName"><strong>Last Name</strong></label>
        <input class="col-xs-12 col-sm-8" id="LastName" name="LastName" type="text" value="{{ $user->LastName }}" placeholder="Last Name"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Email"><strong>Email</strong></label>
        <input class="col-xs-12 col-sm-8" id="Email" name="Email" type="email" value="{{ $user->Email }}" placeholder="Email"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="Password"><strong>Password</strong></label>
        <input class="col-xs-12 col-sm-8" id="Password" name="Password" type="text" value="{{ $user->Password }}" placeholder="Password"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="RoleId"><strong>User Role</strong></label>
        <select class="col-xs-12 col-sm-8" id="RoleId" name="Role" value="{{ $user->RoleId }}">
            <option value="">--- Please pick a role ---</option>

            @foreach($roles as $role)
            <option value="{{ $role->Id }}" {{ $role->Id == $user->RoleId ? 'selected' : ''}}>{{ $role->Name }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4" for="ArtisanTypeId"><strong>Artisan Type</strong></label>
        <select class="col-xs-12 col-sm-8" id="ArtisanTypeId" name="ArtisanType" value="{{ $user->ArtisanTypeId }}">
            <option value="">--- Please pick an artisan type ---</option>

            @foreach($artisanTypes as $artisanType)
            <option value="{{ $artisanType->Id }}" {{ $role->Id == $user->ArtisanTypeId ? 'selected' : ''}}>{{ $artisanType->Name }}</option>
            @endforeach
        </select>
    </div>
    <input class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-0" type="submit" name="Submit" value="Create" />
</form>
@endsection