<!DOCTYPE html>
<html lang="ua" class="bg-[#DADADA]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="mx-[17%] shadow-[0px_0px_50px_2px_rgba(0,0,0,0.36)] roboto-slab bg-white ">
    @yield('content')
</body>
</html>