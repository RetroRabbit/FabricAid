@if($errors != null && count($errors))
<div class="alert alert-danger col-xs-12 col-sm-10 col-sm-offset-1">    
    <ul>
        @foreach ($errors->all() as $error)
            <li class="col-xs-11 col-xs-offset-1">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif