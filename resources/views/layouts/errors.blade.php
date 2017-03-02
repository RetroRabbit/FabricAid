@if($errors != null && count($errors))
<div class="alert-danger col-xs-12 col-sm-10 col-sm-offset-1" style="position: fixed; top: 80px; padding: 15px; z-index: 9;">    
    <ul>
        @foreach ($errors->all() as $error)
            <li class="col-xs-11 col-xs-offset-1">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif