@extends('layouts.app')

@section('title', $article->title)
{{-- meta جلوگیری از خراب‌شدن strip_tags --}}
@section('meta_description', Str::limit($article->summary ?? strip_tags($article->body), 150))
@section('og_title', $article->title)
@section('og_description', Str::limit($article->summary ?? strip_tags($article->body), 150))
@section('og_url', url()->current())
@section('og_image', asset('images/articles/' . ($article->image ?? 'default.jpg')))

@section('content')

    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow p-6">

        <h1 class="text-3xl font-bold mb-3">
            {{ $article->title }}
        </h1>

        <div class="text-sm text-gray-500 mb-4">
            منتشر شده در {{ $article->created_at->format('Y-m-d') }}
        </div>

        @if($article->image)
            <img src="{{ asset('images/articles/' . $article->image) }}" class="rounded mb-5 w-full">
        @endif

        {{-- prose برای تایپوگرافی بهتر --}}
        <div class="prose prose-lg prose-slate rtl text-justify leading-8">
        {{-- nl2br برای پاراگراف‌بندی متن --}}
            {!! nl2br(e($article->body)) !!}
        </div>

    </div>

@endsection