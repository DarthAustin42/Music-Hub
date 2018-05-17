<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Music Hub</title>
        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="/css/myStyle.css">
        <script>
            function update() {
                $.get("game.blade.php", function(data) {
                    $(".theMainBoard").html(data);
                    window.setTimeout(update, 10000);
                })
                console.log("HI");
            }
            update();
        </script>
    </head>

    <body>
        @yield('gameBoard')
    </body>
</html>