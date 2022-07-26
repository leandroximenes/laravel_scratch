<x-layout>

    @include('_posts-header')
    
    <main class="container mx-auto max-w-screen-xl">
        <x-post-card-featured />
        <div class="grid lg:grid-cols-2 gap md:grid-cols-1 ">
            <x-post-card />
            <x-post-card />
        </div>
        <div class="grid lg:grid-cols-3 gap md:grid-cols-1 ">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>
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
<<<<<<< HEAD
                {!! $post->excerpt !!}
            </div>
        </article>
    @endforeach --}}
=======
                <?= $post->excerpt ?>
            </div>
        </article>
    @endforeach
>>>>>>> master
</x-layout>
