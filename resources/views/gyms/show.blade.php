@extends('layouts.app')
@section('title',$gym->name)
@section('meta_description',Str::limit($gym->description,150))
@section('og_title', $gym->name)
@section('og_description', Str::limit($gym->description, 150))
@section('og_image', $gym->image ? asset($gym->image) : asset('images/default-gym.jpg'))
@section('content')
<div class="max-w-5xl mx-auto bg-white shadow-md rounded p-6">

    <img src="{{ $gym->image }}" alt="{{ $gym->name }}" class="w-full h-64 object-cover rounded mb-4">

    <h1 class="text-3xl font-bold mb-2">{{ $gym->name }}</h1>
    <p class="text-gray-700 mb-4">{{ $gym->description }}</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div>
            <h2 class="text-xl font-semibold mb-1">آدرس</h2>
            <p>{{ $gym->address }}</p>
        </div>
        <div>
            <h2 class="text-xl font-semibold mb-1">تلفن تماس</h2>
            <p>{{ $gym->phone }}</p>
        </div>
        <div>
            <h2 class="text-xl font-semibold mb-1">ساعت کاری</h2>
            <p>{{ $gym->hours }}</p>
        </div>
        <div>
            <h2 class="text-xl font-semibold mb-1">سطح کلاس‌ها</h2>
            <p>{{ $gym->level }}</p>
        </div>
    </div>

    <a href="{{ route('contact') }}" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">
        تماس با ما / ثبت نام
    </a>

</div>
@endsection
