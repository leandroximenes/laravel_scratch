<header class="max-w-xl mx-auto mt-20 text-center">
    <div class="mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">Laravel From Scracth</span> News</h1>
    </div>
    <div class="mt-10 grid-cols-1 gap-5 grid lg:flex text-sm">
        <x-post.category-dropdown :categories="$categories" />
        <!-- TODO -->
        <!-- <select class="px-4 py-3 my-auto bg-gray-200 mx-2 rounded-xl font-semibold ">
            <option value="1">Other Filters</option>
        </select> -->
        <label class="px-4 py-3 my-auto bg-gray-200 mx-2 rounded-xl font-semibold flex aligng verticaly">
            <svg class="h-4 w-4 -ml-2 mx-2 my-auto text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
            <form action="/" method="get">
                <input type="text" class="bg-gray-200 placeholder-gray-500 font-semibold focus:outline-none"
                placeholder="Find something?" name="search" value="{{ request('search') }}">
            </form>
        </label>
    </div>
</header>