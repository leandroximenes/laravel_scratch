<x-layout>
    @foreach ($posts as $key => $post)
        <article>
            <h1>
                <a href="/post/<?= $post->slug ?>">
                    <?= $post->title ?>
                </a>
            </h1>
            <p>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                <?= $post->excerpt ?>
            </div>
        </article>
    @endforeach
</x-layout>
