@props(['currentCategory', 'categories' ])
@php
$itemClass = 'block text-left px-4 py-1 font-normal leading-6 hover:bg-gray-300 hover:px-8';
function active($category){
    if($category)
        return request()->is("categories/{$category->slug}") ? 'bg-gray-400' : '';
    else
        return request()->routeIs("home") ? 'bg-gray-400' : '';
}
@endphp
<div class="px-4 py-3 my-auto bg-gray-200 mx-2 rounded-xl font-semibold">
    <div x-data="{show: false}" @click.away="show = false">
        <button class="bg-gray-200 font-bold rounded inline-flex items-center" @click="show = !show">
            <span>
                Category
            </span>
            <svg class="w-4 h-4 pt-1 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div x-show="show" class="px-2 py-3 -mx-4 mt-4 absolute bg-gray-200 rounded-xl w-32 max-h-40 overflow-auto"
            style="display: none">
            <a href="/" class="{{ $itemClass }} {{ active(null) }}">All</a>
            @foreach($categories as $category)
            <a href="/categories/{{ $category->slug }}" class="{{ $itemClass }} {{ active($category) }}">
                {{ ucfirst(trans($category->name)) }}
            </a>
            @endforeach
        </div>
    </div>
</div>