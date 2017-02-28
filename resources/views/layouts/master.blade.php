<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <title>SOLID - Bootstrap 3 Theme</title>

        @include('includes.head')
    </head>

    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <p class="navbar-brand" href="#">SCOPE OF WORK | SOW</p>
                </div>

                <div class="navbar-collapse collapse navbar-right">            
                    <ul class="nav navbar-nav">
                        @yield('nav-content')       
                    </ul>
                </div>
            </div>
        </div>
        
        @yield('content')

        @include('includes.scripts')
    </body>
</html>
