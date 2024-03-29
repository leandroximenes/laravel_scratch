@props(['post'])
<article class="mt-10 p-8 hover:bg-gray-100 transition duration-300 rounded-xl">
    <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-8">
        <div>
            <!-- TODO: Image -->
            <img class="rounded-xl" src="/images/illustration-1.png">
        </div>
        <div class="flex-1 flex flex-col justify-between gap-5">
            <main>
                <x-post.category-button :category="$post->category" />
                <h1 class="text-3xl tracking-wide mt-5 mb-1 font-light">
                    <a href="/post/{{ $post->slug }}">
                        {{ $post['title'] }}
                    </a>
                </h1>
                <h5 class="text-gray-400 text-xs">Published <time>{{ $post->created_at->diffForHumans() }}</time></h5>

                <div class="text-justify text-md font-light mt-5 space-y-4">
                    {!! $post->excerpt !!}
                </div>
            </main>
            <footer class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-2">
                        <b>{{ $post->author->name }}</b>
                    </div>
                </div>
                <a class="bg-gray-200 text-xs font-semibold py-2 px-8 rounded-full transition duration-300 hover:bg-gray-300"
                    href="/post/{{ $post->slug }}">Read More</a>
            </footer>
        </div>
    </div>
</article>