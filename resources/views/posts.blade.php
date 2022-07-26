<x-layout>

    @include('_posts-header')

    <main class="container mx-auto max-w-screen-xl">
        @if ($posts->count())
            <x-post-grid :posts="$posts" />
        @else
            <p class="text-center">No posts yet. Please check back later</p>
        @endif

    </main>

    {{-- @foreach ($posts as $key => $post)
        <article>
            <h1>
                <a href="/post/ {{ $post->slug }} ">
                    {!! $post->title !!}
                </a>
            </h1>
            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                {!! $post->excerpt !!}
            </div>
        </article>
    @endforeach --}}
</x-layout>
