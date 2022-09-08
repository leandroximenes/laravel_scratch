<x-layout>
    @include ('components/post/_header')
    <main class="container mx-auto max-w-screen-xl">
        @if($posts->count())
            <x-post.featured-card :post="$posts[0]" />
            @if($posts->count() > 1)
                <div class="grid lg:grid-cols-6 gap md:grid-cols-1 ">
                    @foreach($posts->skip(1) as $post)
                        <x-post.card 
                            :post="$post" 
                            class="{{ $loop->iteration > 2 ? 'col-span-2' : 'col-span-3' }}" 
                        />
                    @endforeach
                </div>
            @endif
        @endif
    </main>
</x-layout>