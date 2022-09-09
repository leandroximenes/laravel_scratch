@props(['post'])
<article {{ $attributes->merge(['class' => 'p-8 hover:bg-gray-100 transition duration-300 rounded-xl']) }}>
    <div class="flex-1 flex flex-col justify-between gap-5">
        <main>
            <!-- TODO: Image -->
            <img class="rounded-xl mb-5" src="/images/illustration-1.png">
            <x-post.category-button :category="$post->category" />
            <h1 class="text-3xl tracking-wide mt-5 mb-1 font-light"><a href="/post/{{ $post->slug }}">
                    {{ $post['title'] }}
                </a></h1>
            <h5 class="text-gray-400 text-xs">Published <time>{{ $post->created_at->diffForHumans() }}</time></h5>

            <div class="text-justify text-md font-light mt-5 space-y-4">
                {!! $post->excerpt !!}
            </div>
        </main>
        <footer>
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-2">
                        <b>{{ $post->author->name }}</b>
                    </div>
                </div>
                <a class="bg-gray-200 text-xs font-semibold py-2 px-8 rounded-full transition duration-300 hover:bg-gray-300"
                    href="/post/{{ $post->slug }}">Read More</a>
            </div>
        </footer>
    </div>
</article>