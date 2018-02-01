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
		    <center><h1>Music Hub</h1></center>
		  </div>
		</div>
        @yield('currentRecords')
        @yield('newRecords')
        @yield('updateRecords')
        

        <div class="footer">
		  	<p>Footer</p>
		</div>
    </body>
</html>