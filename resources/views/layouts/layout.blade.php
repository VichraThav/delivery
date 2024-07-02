<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel CRUD')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> <!-- Custom CSS -->
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
