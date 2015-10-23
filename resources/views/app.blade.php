<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>