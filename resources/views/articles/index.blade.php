
@extends('layouts.app')

@section('title', 'مقالات ورزشی - باشگاه جدال')
@section('meta_description', 'مقالات تخصصی درباره تمرین، تغذیه و برنامه‌های ورزشی')
@section('og_title', 'مقالات ورزشی - باشگاه جدال')
@section('og_description', 'مطالب آموزشی و مقالات تخصصی دنیای ورزش و باشگاهداری')
@section('og_url', url()->current())

@section('content')

<h1 class="text-3xl font-bold mb-6">مقالات</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    @foreach($articles as $article)
        <a href="{{ route('articles.show', $article->slug) }}" class="block bg-white p-4 rounded-xl shadow hover:shadow-lg transition">

            {{--برای سئو استفاده کرد alt text   باید همیشه از--}}
            <h2 class="text-xl font-semibold mb-2">
                {{ $article->title }}
            </h2>

            <p class="text-gray-600 text-sm mb-2">
                {{ Str::limit($article->summary ?? $article->body, 120) }}
            </p>

            <span class="text-xs text-gray-400">
                {{ $article->created_at->format('Y-m-d') }}
            </span>

        </a>
    @endforeach

</div>

    {{-- می‌تونیم تعداد زیادی مقاله رو با سرعت بارگذاری بهینه نمایش بدیم --}}
<div class="mt-6">
    {{ $articles->links() }}
</div>

@endsection
