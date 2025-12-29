<h1>لیست باشگاه‌ها</h1>

@foreach($gyms as $gym)
    <p>{{ $gym->name }}</p>
@endforeach

{{ $gyms->links() }}
