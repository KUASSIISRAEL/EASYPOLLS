<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Easy Polls</title>
</head>
<body>
    @include('layouts.partials._nav')

    @include('layouts.partials._flash_messages')

    <main role="main">
        @yield('content')
    </main>
</body>
</html>
