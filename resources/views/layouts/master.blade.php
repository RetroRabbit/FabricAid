<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <title>{{ $title }}</title>

        @include('includes.head')
    </head>

    <body>
        @if(Request::is('/'))
        <div class="navbar navbar-default navbar-fixed-top home" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <p class="navbar-brand" href="#">FabricAid</p>
                </div>

                <div class="navbar-right">            
                    <ul class="nav navbar-nav">
                        @yield('nav-content')       
                    </ul>
                </div>
            </div>
        </div>
        @else
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <p class="navbar-brand" href="#">FabricAid</p>
                </div>

                <div class="navbar-collapse collapse navbar-right">            
                    <ul class="nav navbar-nav">
                        @yield('nav-content')       
                    </ul>
                </div>
            </div>
        </div>
        @endif

        <div class="subheader">
            <div class="container">
                <h1>{{ $header }}</h1>
            </div>
        </div>

        <div id="body-content" class="container-fluid">            
            @yield('content')
        </div>

        @include('includes.scripts')
    </body>
</html>
