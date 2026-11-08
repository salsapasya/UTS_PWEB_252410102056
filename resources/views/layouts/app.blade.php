<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | ELORA Healing Studio</title>
    <link rel="icon" href="/images/logo.png" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @if (session()->has('username'))
    @include('components.navbar', [
        'username' => $username ?? ''
    ])
    @endif

    <main class="main-content">
        @yield('content')
    </main>

    @if (session()->has('username'))
    @include('components.footer')
    @endif
</body>
</html>
