<!-- Blade Templating Sample -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blade Sample')</title>
</head>
<body>
    <header>
        <h1>Blade Templating Sample</h1>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>
