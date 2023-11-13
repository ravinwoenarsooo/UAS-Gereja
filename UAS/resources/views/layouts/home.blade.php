<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="text-black bg-yellow-50 body-font">
        <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center" bis_skin_checked="1">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <img src="{{ asset('images/paroki.png') }}" alt="Paroki Logo" class="w-16 rounded-full">
            </a>
            <span class="ml-3 text-xl font-bold ">Paroki Santo Barnabas</span>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-black">First Link</a>
                <a class="mr-5 hover:text-black">Second Link</a>
                <a class="mr-5 hover:text-black">Third Link</a>
                <a class="mr-5 hover:text-black">Fourth Link</a>
            </nav>
            <button class="inline-flex items-center bg-orange-00 border-0 py-1 px-3 focus:outline-none hover:bg-yellow-300 hover:text-black rounded text-base mt-4 md:mt-0">Home
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-gray-400 bg-stone-800 body-font">
        <div class="container px-5 py-24 mx-auto" bis_skin_checked="1">
            <div class="flex flex-wrap md:text-left text-center order-first" bis_skin_checked="1">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-left text-white mb-20">Paroki Pamulang
                <br class="hidden sm:block">Gereja St.
                <br class="hidden sm:block">Barnabas
            </h1>
                <!-- <div class="lg:w-1/4 md:w-1/2 w-full px-4" bis_skin_checked="1">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">SUBSCRIBE</h2>
                    <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start" bis_skin_checked="1">
                    <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2" bis_skin_checked="1">
                        <label for="footer-field" class="leading-7 text-sm text-gray-400">Placeholder</label>
                        <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-800 rounded border bg-opacity-40 border-gray-700 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                    </div>
                    <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Bitters chicharrones fanny pack
                    <br class="lg:block hidden">waistcoat green juice
                    </p>
                </div> -->
            </div>
        </div>
        <div class="bg-white" bis_skin_checked="1">
            <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col" bis_skin_checked="1">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                    <img src="{{ asset('images/paroki.png') }}" alt="Paroki Logo" class="w-10 h-10 rounded-full">
                </a>
                <p class="text-sm text-black sm:ml-6 sm:mt-0 mt-4">Copyright © 2023</p>
                <p class="text-sm text-black font-bold sm:ml-6 sm:mt-0 mt-4">Komsos St.Barnabas Pamulang</p>
                <p class="text-sm text-black sm:ml-6 sm:mt-0 mt-4">All Right Reserved.</p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="text-black">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-black">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-black">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-black">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    
</body>
</html>
