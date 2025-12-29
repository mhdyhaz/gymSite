<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'باشگاه ما')</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans">

    @include('layouts.header')

    <main class="container mx-auto py-6 px-4">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>

</html>