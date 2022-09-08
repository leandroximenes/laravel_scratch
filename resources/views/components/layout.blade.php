<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel From Scratch Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
</head>

<body>
    <section class="px-6 py-8">
        <nav class="grid-cols-1 grid justify-center justify-items-center lg:flex lg:justify-between">
            <div class="mb-10">
                <a href="/">
                    <img src="/images/logo.svg" alt="laracast logo" width="165" height="16">
                </a>
            </div>
            <div>
                <a href="/" class="text-xs text-black uppercase font-bold">Home Page</a>
                <a href="#" class="text-xs text-white uppercase 
                font-semibold bg-blue-500 py-4 px-6 mx-2 rounded-full">
                    Subscribe for Updates
                </a>
            </div>
        </nav>
        {{ $slot }}
        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-8 mt-16  mx-auto">
            <div class="flex">
                <div class="m-auto">
                    <img src="/images/lary-newsletter-icon.svg" class="mx-auto">
                    <h1 class="text-3xl tracking-wide mx-5 font-light">Stay in touch with the latest posts</h1>
                    <h5>Promise to keep the inbox clean. No bugs.</h5>
                    <form class="px-4 py-3 my-5 bg-gray-200 rounded-full font-semibold flex aligng verticaly
                        justify-between">
                        <div class="flex aligng verticaly">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 font-thin mr-2"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <input type="text" class="bg-gray-200 placeholder-gray-500 font-thin focus:outline-none"
                                placeholder="Your email address">
                        </div>
                        <input type="button"
                            class="bg-blue-500 uppercase -my-3 -mx-4 px-7 font-semibold rounded-full text-white text-sm"
                            value="subcribe">
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>