<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoList App</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container">

        <h1> @yield('title', 'Todo List Laravel App') </h1>

        @yield('content')

        <footer id="footer" class="text-center">
            <p>Copyright TodoList</p>
        </footer>

    </div>
</body>
</html>