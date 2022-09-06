<x-layout>
    @include ('_post-header')
    <main class="container mx-auto max-w-screen-xl">
        <x-post-featured-card />
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
</x-layout>