<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Music Hub</title>
        <!-- CSS And JavaScript -->
    </head>

    <body>
    	<div class="container">
		  <div class="jumbotron">
		    <h1>Music Hub</h1>
		  </div>
		</div>
        @yield('currentRecords')
        @yield('newRecords')
        @yield('updateRecords')
    </body>
</html>