@extends('layouts.app')

@section('title', 'لیست باشگاه‌ها')

@section('content')
<h1 class="text-2xl font-bold mb-4">لیست باشگاه‌ها</h1>

@foreach($gyms as $gym)
    <div class="bg-white p-4 rounded shadow mb-4 hover:shadow-lg transition">
        <a href="{{ route('gyms.show', $gym->slug) }}" class="text-red-600 font-semibold">{{ $gym->name }}</a>
        <p class="text-gray-600">{{ $gym->address }}</p>
    </div>
@endforeach

{{ $gyms->links() }}
@endsection
