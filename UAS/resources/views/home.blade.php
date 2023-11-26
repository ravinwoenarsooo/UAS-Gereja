@extends('layouts.home')

@section('content')
<section class="text-black bg-white body-font">
    <div class="container px-5 py-24 mx-auto" bis_skin_checked="1">
        <div class="flex flex-col text-center w-full mb-20" bis_skin_checked="1">
            <h2 class="text-xs text-indigo-400 tracking-widest font-medium title-font mb-1">INFORMASI PENTING PAROKI</h2>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black">Gereja Katolik Santo Barnabas</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Selamat datang di Pusat Informasi Penting Paroki Santo Barnabas! Di sini, dapatkan berita terkini, pengumuman gerejawi, dan informasi penting lainnya. Selamat membaca!</p>
        </div>
        <div class="flex flex-wrap" bis_skin_checked="1">
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-800" bis_skin_checked="1">
                <h2 class="text-lg sm:text-xl text-black font-medium title-font mb-2">Shooting Stars</h2>
                <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                <a class="text-indigo-400 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-800" bis_skin_checked="1">
                <h2 class="text-lg sm:text-xl text-black font-medium title-font mb-2">The Catalyzer</h2>
                <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                <a class="text-indigo-400 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-800" bis_skin_checked="1">
                <h2 class="text-lg sm:text-xl text-black font-medium title-font mb-2">Neptune</h2>
                <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                <a class="text-indigo-400 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-800" bis_skin_checked="1">
                <h2 class="text-lg sm:text-xl text-black font-medium title-font mb-2">Melanchole</h2>
                <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                <a class="text-indigo-400 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="container px-5 py-24 mx-auto">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-black mb-20">Jadwal Misa
            <br class="hidden sm:block">Gereja Santo Barnabas
        </h1>
        <div class="-my-8 divide-y-2 divide-gray-800">
            <div class="py-8 flex flex-wrap md:flex-nowrap">
                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="font-semibold title-font text-black">Misa Harian</span>
                <span class="mt-1 text-black text-sm">Gereja Katolik Santo Barnabas</span>
                </div>
                <div class="md:flex-grow">
                <h2 class="text-2xl font-medium text-black title-font mb-2">Jam 06.00 WIB</h2>
                <p class="leading-relaxed">Perayaan Ekaristi yang dilakukan setiap hari Senin - Jumat di Gereja Katolik Santo Barnabas.</p>
                <!-- <a class="text-indigo-400 inline-flex items-center mt-4">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a> -->
                </div>
            </div>
            <div class="py-8 flex border-t-2 border-gray-800 flex-wrap md:flex-nowrap">
                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="font-semibold title-font text-black">Misa Jumat Pertama</span>
                <span class="mt-1 text-black text-sm">Gereja Katolik Santo Barnabas</span>
                </div>
                <div class="md:flex-grow">
                <h2 class="text-2xl font-medium text-black title-font mb-2">Jam 18.00 WIB</h2>
                <p class="leading-relaxed">Perayaan Ekaristi yang dilakukan pada setiap awal bulan di Gereja Katolik Santo Barnabas.</p>
                <!-- <a class="text-indigo-400 inline-flex items-center mt-4">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a> -->
                </div>
            </div>
            <div class="py-8 flex border-t-2 border-gray-800 flex-wrap md:flex-nowrap">
                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="font-semibold title-font text-black">Misa Sabtu</span>
                <span class="mt-1 text-black text-sm">Gereja Katolik Santo Barnabas</span>
                </div>
                <div class="md:flex-grow">
                <h2 class="text-2xl font-medium text-black title-font mb-2">Jam 17.00 WIB</h2>
                <p class="leading-relaxed">Perayaan Ekaristi yang dilakukan setiap Sabtu di Gereja Katolik Santo Barnabas.</p>
                <!-- <a class="text-indigo-400 inline-flex items-center mt-4">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a> -->
                </div>
            </div>
            <div class="py-8 flex border-t-2 border-gray-800 flex-wrap md:flex-nowrap">
                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="font-semibold title-font text-black">Misa Minggu</span>
                <span class="mt-1 text-black text-sm">Gereja Katolik Santo Barnabas</span>
                </div>
                <div class="md:flex-grow">
                <h2 class="text-2xl font-medium text-black title-font mb-2">Jam 05.30 WIB</h2>
                <h2 class="text-2xl font-medium text-black title-font mb-2">Jam 07.30 WIB</h2>
                <h2 class="text-2xl font-medium text-black title-font mb-2">Jam 10.00 WIB</h2>
                <h2 class="text-2xl font-medium text-black title-font mb-2">Jam 17.00 WIB</h2>
                <p class="leading-relaxed">Perayaan Ekaristi yang dilakukan setiap Minggu di Gereja Katolik Santo Barnabas.</p>
                <!-- <a class="text-indigo-400 inline-flex items-center mt-4">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a> -->
                </div>
            </div>
        </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-black">Warta Paroki</h1>
                    <div class="h-1 w-20 bg-yellow-950 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-black text-opacity-90">Selamat datang di edisi terbaru Warta Paroki Santo Barnabas! Dalam bulan yang penuh berkat ini, kami ingin berbagi berbagai kegiatan dan peristiwa yang mengisi hidup berjemaat. Gereja Santo Barnabas terus menjadi tempat yang penuh kasih dan rohaniah, menginspirasi umat untuk hidup dalam iman dan pelayanan.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">SUBTITLE</h3>
                        <h2 class="text-lg text-white font-medium title-font mb-4">Chichen Itza</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/721x401" alt="content">
                <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">SUBTITLE</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">Colosseum Roma</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/722x402" alt="content">
                <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">SUBTITLE</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">Great Pyramid of Giza</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">SUBTITLE</h3>
                <h2 class="text-lg text-white font-medium title-font mb-4">San Francisco</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
