@extends('layouts.app')

@section('title', 'باشگاه‌ها - باشگاه جدال')
@section('meta_description', 'لیست باشگاه‌ها و معرفی کلاس‌ها و برنامه‌های ورزشی در باشگاه جدال.')
@section('og_title', 'باشگاه‌ها - باشگاه جدال')
@section('og_description', 'لیست باشگاه‌ها و معرفی کلاس‌ها و برنامه‌های ورزشی در باشگاه جدال.')
@section('og_url', url()->current())

@section('content')
    <h1 class="text-3xl font-bold mb-6">باشگاه‌ها</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($gyms as $gym)
            <a href="{{ route('gyms.show', $gym->slug) }}" class="block bg-white rounded-lg shadow hover:shadow-lg transition p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $gym->name }}</h2>
                <p class="text-gray-600 text-sm">{{ Str::limit($gym->description, 100) }}</p>
            </a>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $gyms->links() }} 
        
    </div>
@endsection
