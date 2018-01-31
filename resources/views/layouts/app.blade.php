<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <style>
            .addRecord {
                top: 20px;
                margin: 10px;
                padding: 10px;
            }
        </style>
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="addRecord">
            <h1>Add a new song</h1>
        </div>
        @yield('content')
    </body>
</html>