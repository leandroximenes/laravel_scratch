@props(['posts'])

<x-post-card-featured :post="$posts[0]" />

@if ($posts->count() > 1)
    <div class="grid lg:grid-cols-6 gap md:grid-cols-1 ">
        @foreach ($posts->skip(1) as $post)
            <x-post-card :post="$post" class="col-span-{{ $loop->iteration < 3 ? 3 : 2 }}" />
        @endforeach
    </div>
@endif
