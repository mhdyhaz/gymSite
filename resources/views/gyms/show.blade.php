@extends('layouts.app')

@section('title', $gym->name . ' - باشگاه جدال')
@section('meta_description', Str::limit($gym->description, 150))
@section('og_title', $gym->name)
@section('og_description', Str::limit($gym->description, 150))
@section('og_url', url()->current())
@section('og_image', asset('images/gyms/' . ($gym->image ?? 'default.jpg')))

@section('content')
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $gym->name }}</h1>

        @if($gym->image)
            <img src="{{ asset('images/gyms/' . $gym->image) }}" alt="{{ $gym->name }}" class="w-full rounded mb-4">
        @endif

        <p class="text-gray-700 mb-4">{{ $gym->description }}</p>

        <h2 class="text-2xl font-semibold mb-2">کلاس‌ها</h2>
        @if($gym->classes && $gym->classes->count())
            <ul class="list-disc pl-5 text-gray-700">
                @foreach($gym->classes as $class)
                    <li>{{ $class->name }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">هیچ کلاسی ثبت نشده است.</p>
        @endif
    </div>
@endsection
