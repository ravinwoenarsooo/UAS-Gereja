@extends('layouts.home')

@section('content')
<div id="default-carousel" class="relative z-0" data-carousel="static">
<section class="text-black body-font" style="background-image: url('{{ asset('/images/image_5.svg') }}'); background-size: cover;">
    <div class="container px-10 py-54 mx-auto z-0">
        <div class="max-w-xs mx-auto z-0">
            <div class="overflow-hidden relative h-screen rounded-lg sm:h-screen xl:h-screen 2xl:h-screen">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                    <img src="{{ asset('images/background-nav.svg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
            
                    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="hidden">Anterior</span>
                    </span>
                </button>
            
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="hidden">Siguiente</span>
                    </span>
                </button>
            </div>
            </div>
        </div>
    </div>
    <div class="container px-5 py-24 mx-auto" bis_skin_checked="1">
        <div class="flex flex-col text-center w-full mb-20" bis_skin_checked="1">
            <h2 class="text-xs text-indigo-400 tracking-widest font-medium title-font mb-1">INFORMASI PENTING PAROKI</h2>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black">Gereja Katolik Santo Barnabas</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Selamat datang di Pusat Informasi Penting Paroki Santo Barnabas! Di sini, dapatkan berita terkini, pengumuman gerejawi, dan informasi penting lainnya. Selamat membaca!</p>
        </div>
        <div class="flex flex-wrap" bis_skin_checked="1">
            @foreach($infoPentingCollection as $infoSingle)
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-800" bis_skin_checked="1">
                    <h2 class="text-lg sm:text-xl text-black font-medium title-font mb-2">{{ $infoSingle->Judul }}</h2>
                    <p class="leading-relaxed text-base mb-4">{{ Str::limit($infoSingle->Isi, 25) }}</p>
                    <a href="#" class="text-indigo-400 inline-flex items-center">Lihat Informasi
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            @endforeach
            
            @if($infoPentingCollection->isEmpty())
                <div class="w-full flex justify-center">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <p class="text-white">Tidak ada Informasi Penting!</p>
                    </div>
                </div>
            @endif
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
            @forelse($wartaParoki as $wartaParoki)
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                    <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                    <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">{{ $wartaParoki->TanggalUpload }}</h3>
                    <h2 class="text-lg text-white font-medium title-font mb-4">{{ $wartaParoki->Judul }}</h2>
                    <p class="leading-relaxed text-base">{{ Str::limit($wartaParoki->Isi, 25) }}</p>
                    <a href="#" class="text-indigo-400 inline-flex items-center">Lihat Informasi
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="w-full flex justify-center">
                <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                    <p class="text-white">No Warta Paroki Added!</p>
                </div>
            </div>
            @endforelse
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
    </div>
</section>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
@endsection
