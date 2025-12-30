@extends('layouts.app')

@section('title', 'مقالات باشگاه جدال – بهترین مقالات ورزشی')
@section('meta_description', 'مقالات باشگاه جدال در زمینه‌های مختلف ورزشی، تغذیه، و سلامت.')

@section('og_title', 'مقالات باشگاه جدال')
@section('og_description', 'مقالات باشگاه جدال در زمینه‌های مختلف ورزشی، تغذیه، و سلامت.')
@section('og_url', url()->current())
@section('og_image', asset('images/default-article.jpg'))

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-4">مقالات باشگاه جدال</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($articles as $article)
        <div class="bg-white shadow-md rounded-lg p-4">
            {{--برای سئو استفاده کرد alt text   باید همیشه از--}}
            <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-48 object-cover rounded mb-4">
            <h2 class="text-xl font-semibold mb-2">{{ $article->title }}</h2>
            <p class="text-gray-600 mb-4">{{ Str::limit($article->content, 120) }}</p>
            <a href="{{ route('articles.show', $article->slug) }}" class="text-red-600 hover:underline">ادامه مطلب</a>
        </div>
        @endforeach
    </div>

    {{-- می‌تونیم تعداد زیادی مقاله رو با سرعت بارگذاری بهینه نمایش بدیم --}}
    <div class="mt-6">
        {{ $articles->links() }}
    </div>
</div>
@endsection
