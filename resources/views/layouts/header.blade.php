<header class="bg-white shadow py-4">
    <div class="container mx-auto flex justify-between items-center px-4">

        <a href="{{ url('/') }}" class="text-2xl font-bold text-red-600">
            باشگاه جدال
        </a>

        <nav class="space-x-4 text-gray-700">
            <a href="{{ route('gyms.index') }}" class="hover:text-red-600">باشگاه‌ها</a>
            {{-- <a href="{{ route('articles.index') }}" class="hover:text-red-600">مقالات</a>
            <a href="{{ route('contact') }}" class="hover:text-red-600">تماس با ما</a> --}}
        </nav>

    </div>
</header>
