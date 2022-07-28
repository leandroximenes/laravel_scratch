<x-layout>
    <main class="container mx-auto max-w-screen-xl">
        <article class="mt-10 p-8">
            <div class="md:grid md:grid-cols-3 md:grid-cols-1 gap-8">
                <div>
                    <img class="rounded-xl" src="/images/illustration-1.png">
                    <h5 class="text-sm mt-3 md:text-center text-gray-500">Published
                        {{ $post->created_at->diffForHumans() }}</h5><br>
                    <div class="flex items-center">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-2">
                            <b>{{ $post->author->name }}</b>
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex flex-col col-span-2 justify-between gap-5">
                    <main>
                        <div class="space-x-5 justify-between flex invisible md:visible">
                            <h1 class="text-xl flex items-center hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                                <a href="/">
                                    Back to Post</a>
                            </h1>
                            <div>
                                <x-category-button :category="$post->category" />
                            </div>
                        </div>
                        <h1 class="text-3xl tracking-wide mt-8 mb-1 font-bold"> {{ $post->title }}</h1>


                        <div class="text-justify text-lg mt-5 space-y-4">
                            {!! $post->body !!}
                        </div>
                    </main>
                </div>
            </div>
        </article>
    </main>
</x-layout>
