@props(['category'])
<div>
    <a href="/categories/{{ $category->slug }}"
        class="px-3 py-1 border border-blue-300 rounded-full font-medium uppercase text-xs text-blue-300">
        {{ $category->name }}
    </a>
</div>