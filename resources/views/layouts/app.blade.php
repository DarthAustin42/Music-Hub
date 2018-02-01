<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Music Hub</title>
        <!-- CSS And JavaScript -->
    </head>

    <body>
    	<h1>Music Hub</h1>
        @yield('currentRecords')
        @yield('newRecords')
        @yield('updateRecords')
    </body>
</html>