<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
</head>

<body>
    @if (Route::has('login'))
    @auth
    <script>
        window.location = "/dashboard";
    </script>

    @else
    <script>
        window.location = "/login";
    </script>

    @endif
    @endif

</body>

</html>