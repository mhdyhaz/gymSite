<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'باشگاه جدال – بهترین مقالات و معرفی باشگاه')</title>
    {{-- این تگ به گوگل میگه این صفحه برای چی.همون توضیح کوتاهی که بعده سرچ در گوگل زیر لینک صفحه میاد --}}
    <meta name="description" content="@yield('meta_description', 'باشگاه جدال – مقالات، معرفی کلاس‌ها، برنامه‌ها و نکات ورزشی')" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- به گوگل می‌گوید این صفحه را ایندکس کند و لینک‌های آن را دنبال کند. --}}
    <meta name="robots" content="@yield('meta_robots', 'index, follow')" />
    {{-- برای اشتراک‌گذاری در شبکه‌های اجتماعی مهم هستند Open Graph (OG)--}}
    <meta property="og:title" content="@yield('og_title',  config('app.name')))" />
    <meta property="og:description" content="@yield('og_description', 'باشگاه جدال برای شماست')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('og_url', url()->current())" />
    @if(View::hasSection('og_image'))
        <meta property="og:image" content="@yield('og_image')" />
    @endif
    
</head>

<body class="bg-gray-50 font-sans text-gray-800">

    @include('layouts.header')

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>

</html>