<!DOCTYPE html>
<html lang="en"><html lang="en" data-theme="retro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.nav')
    @yield('content')
</body>
</html>