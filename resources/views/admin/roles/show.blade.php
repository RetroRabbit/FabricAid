@extends('admin.layout')

@section('content')
<!--div class="container">
    <div id="table-create" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <a class="col-xs-2 col-lg-offset-1 btn btn-success" href="{{ route('admin-roles-create') }}">
                <i class="fa fa-plus col-xs-12 col-sm-12 col-md-3" style="line-height: 20px;"></i>
                <span class="col-xs-0 col-sm-0 col-md-9">Create</span>
            </a>
        </div> 
    </div-->
    
@if(count($roles) == 0)
    <div id="nothing" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <h1>Nothing here</h1>
            <h3>Looks like there are no roles to display</h3>
        </div>
    </div>
@else
    <div id="table-header" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <p class="col-xs-1"><strong>Nr.</strong></p>
            <p class="col-xs-4"><strong>Role Name</strong></p>
            <p class="col-xs-6"><strong>Permissions</strong></p>
            <p class="col-xs-1" style="text-align: center;"><strong>Edit</strong></p>
        </div>
    </div>

    <div id="table-body" class="row">
        @for($i = 0; $i < count($roles); ++$i)
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <p class="col-xs-1">{{ $i + 1 }}</pl>
            <p class="col-xs-4">{{ $roles[$i]['Name'] }}</p>
            <div class="col-xs-6" style="overflow-y: auto;">
                @if (count($roles[$i]['Access']) == 0)
                    <p style="display: inline-block;">This role has no access rights</p>
                @else
                    @for($j = 0; $j < count($roles[$i]['Access']); ++$j)
                        <p style="display: inline-block;">{{ $roles[$i]['Access'][$j] }}</p>
                    @endfor
                @endif
            </div>
            <a class="col-xs-1" style="text-align: center; color: #384452;" href="{{ route('admin-roles-update', $roles[$i]['Id']) }}"><i class="fa fa-pencil" aria-hidden="true" style="line-height: 40px;"></i></a>
        </div>
        @endfor
    </div>
@endif
</div>
@endsection