<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
</head>

<body>
    <h1>This is Contact Page from Controller :D</h1>
    {{-- <a href="{{ route('about.page') }}">Go to About Page</a> --}}
    {{-- Bisa juga route url seperti ini, mengikuti dari nama route pada web.php --}}
    <a href="{{ url('/about') }}">Go to About Page</a>
</body>

</html>
