<!DOCTYPE html>
<html>
 	<head>
        <title>MAIN WEBSITE</title>
		<meta charset=utf-8 >
		<meta name="robots" content="index, follow" > 
		<meta name="keywords" content="Accounting, Book Keepers, Consultants " > 
		<meta name="description" content="Accounting, Book Keepers, Consultants" > 
		<meta name="author" content="Jdev Office Solution Inc">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
        @include('includes.favicon')
        @include('includes.externalcss')
        @yield('embeddedcss')

    </head>
    <body>
        <div id="loader-overflow">
            <div id="loader3">Please enable JS</div>
        </div>	
        <div id="wrap" class="boxed ">
            <div class="grey-bg">
                @include('includes.topnavigation')
                @yield('content')
                @include('includes.footer')
            </div>
        </div>

        @include('includes.externaljs')
        @yield('embeddedjs')
    </body>
</html>