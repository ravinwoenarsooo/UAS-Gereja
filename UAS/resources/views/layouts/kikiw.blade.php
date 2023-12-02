<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paroki Santo Barnabas</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/js/app.js')
</head>
<body>
    <header class="text-black bg-[url('/public/images/background-nav.svg')] sticky top-0 z-30">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-2 flex flex-row items-center justify-between">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/paroki.png') }}" alt="Logo" class="h-16 w-auto mr-2">
                    <span class="text-lg font-semibold text-gray-900 rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Paroki Santo Barnabas Pamulang</span>
                </a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">Home</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/profile">Profil</a>
                <!-- <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a> -->
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Layanan</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-4 py-4 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Reservasi Fasilitas</a>
                            <!-- <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a> -->
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Login</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-4 py-4 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/admin/login">Admin</a>
                        </div>
                    </div>
                </div>   
            </nav>
        </div>
    </header>

    <main class="py-0" style="background-color: #FAFBDF;">
        @yield('content')
    </main>

    <footer class="text-gray-400 bg-stone-800 body-font fixed bottom-0 w-full">
        <div class="py-8 flex flex-wrap -mb-10 md:text-left text-white order-first md:w-1/2 w-full ml-4">
            <div class="md:w-1/2 w-full px-4">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-left text-white mb-20">
                Paroki Pamulang
                    <br>Gereja St.
                    <br>Barnabas
                </h1>
            </div>
            <div class="md:w-1/2 w-full px-4">    
            <a href="https://www.google.com/maps/place/Saint+Barnabas+Catholic+Church,+Pamulang/@-6.348557,106.7476011,17z/data=!3m1!4b1!4m16!1m9!4m8!1m0!1m6!1m2!1s0x2e69ef0c62f22ac9:0x7f8b5476db79fc14!2sSaint+Barnabas+Catholic+Church,+Pamulang,+Jl.+Moh.+Toha+No.3,+RT.002%2FRW.005,+Pondok+Cabe+Udik,+Pamulang,+South+Tangerang+City,+Banten+15418!2m2!1d106.7502397!2d-6.3485621!3m5!1s0x2e69ef0c62f22ac9:0x7f8b5476db79fc14!8m2!3d-6.3485623!4d106.750176!16s%2Fg%2F1pzq1l0n9?entry=ttu" target="_blank">
                <button class="text-4xl font-bold mb-4">Lokasi Gereja</button>
                
                <nav class="list-none mb-10">
                    St. Barnabas <br className='md:hidden block' />
                    Jl. Moh. Toha No.3, <br className='md:hidden block' />
                    RT.002/RW.005, Pd. Cabe Udik, <br className='md:hidden block' />
                    Kec. Pamulang, Kota Tangerang Selatan, Banten 15418
                </nav>
                </a>
            </div>
        </div>
        <div class="bg-[url('/public/images/background-nav.svg')]" bis_skin_checked="1">
            <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col" bis_skin_checked="1">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                    <img src="{{ asset('images/paroki.png') }}" alt="Paroki Logo" class="w-10 h-10 rounded-full">
                </a>
                <p class="text-sm text-black sm:ml-6 sm:mt-0 mt-4">&copy; {{ date('Y') }}</p>
                <p class="text-sm text-black font-bold sm:ml-6 sm:mt-0 mt-4">Komsos St.Barnabas Pamulang</p>
                <p class="text-sm text-black sm:ml-6 sm:mt-0 mt-4">All Right Reserved.</p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a href="https://www.youtube.com/@KomsosBarnabas" class="ml-3 text-black">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23.2 7.6s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1.1C17.4 4 12 4 12 4s-5.4 0-7.8.2c-.5 0-1.5.1-2.4 1.1C.8 6 .8 7.6.8 7.6s-.2 1.7-.2 3.4v1.8c0 1.7.2 3.4.2 3.4s.2 1.6 1 2.3c.9 1 2 1 2.5 1.1 1.8.2 7.5.2 7.5.2s5.4 0 7.8-.2c.5 0 1.5-.1 2.4-1.1.7-.8 1-2.3 1-2.3s.2-1.7.2-3.4v-1.8c0-1.7-.2-3.4-.2-3.4zM9.5 15.8V8.8l6.7 3.5-6.7 3.5z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/komsossantobarnabas/" class="ml-3 text-black">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
</body>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</html>
