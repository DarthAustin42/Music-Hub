<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Music Hub</title>
        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="/css/myStyle.css">
    </head>

    <body>
    	<div class="container">
		  <div class="jumbotron">
		    <center><h1 style="font-family: 'Raleway', sans-serif;">Music Hub</h1></center>
		  </div>
		</div>
        @yield('currentRecords')
        @yield('newRecords')
        @yield('updateRecords')
        

        <div class="footer">
		  	<center><p>© Austin Nielsen</p></center>
		</div>
    </body>
</html>