@extends('admin.layout')

@section('content')
<div class="container" style="margin-top: 100px;">
    <form class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 row" method="post"> 
        @include('layouts.errors')

        {{ csrf_field() }}
        
        <div class="row form-group">
            <label for="FirstName" class="col-xs-5"><strong>First Name</strong></label>
            <input class="col-xs-7" id="FirstName" name="FirstName" type="text" value="{{ $user->FirstName }}" placeholder="John"/> 
        </div>
        
        <div class="row form-group">
            <label for="LastName" class="col-xs-5"><strong>Last Name</strong></label>
            <input class="col-xs-7" id="LastName" name="LastName" type="text" value="{{ $user->LastName }}" placeholder="Doe"/> 
        </div>
        
        <div class="row form-group">
            <label for="Email" class="col-xs-5"><strong>Email</strong></label>
            <input class="col-xs-7" id="Email" name="Email" type="email" value="{{ $user->Email }}" placeholder="jdoe@domain.com"/> 
        </div>
        
        <div class="row form-group">
            <label for="Password" class="col-xs-5"><strong>Password</strong></label>
            <input class="col-xs-7" id="Password" name="Password" type="text" value="{{ $user->Password }}" placeholder="somepass"/> 
        </div>
        
        <div class="row form-group">
            <label for="RoleId" class="col-xs-5"><strong>User Role</strong></label>
            <select class="col-xs-7" id="RoleId" name="RoleId" value="{{ $user->RoleId }}">
                <option>---</option>
                @foreach($roles as $role)
                <option value="{{ $role->Id }}" {{ $user->RoleId == $role->Id ? 'selected' : '' }}>{{ $role->Name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="row form-group">
            <label for="RoleId" class="col-xs-5"><strong>Artisan Type</strong></label>
            <select class="col-xs-7" id="ArtisanTypeId" name="ArtisanTypeId" value="{{ $user->ArtisanTypeId }}">
                <option>---</option>
                @foreach($artisanTypes as $artisanType)
                <option value="{{ $artisanType->Id }}" {{ $user->ArtisanTypeId == $artisanType->Id ? 'selected' : '' }}>{{ $artisanType->Name }}</option>
                @endforeach
            </select>
        </div>
        <input class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-0" type="submit" name="Submit" value="Update" />
    </form> 
</div> 
@endsection