@extends('Template-User.main')
@section('title', 'PB. Mandiri Palembang || Dashboard')
@section('content')

<section id="Hero" class="bg-[#F2F2F2]">
    <div class="container font-neuton flex justify-between">
        <div class="grid-cols-6">
            <h1 class="font-bold text-[#E26868] text-[35px] pt-[130px]">PB. Mandiri Palembang</h1>
            <p class="font-semibold text-[#767676] w-96 text-[18px]">Tempat pelatihan Badminton berkualitas yang
                telah melahirkan banyak atlet-atlet muda berprestasi </p>
            <div class="mt-3 cursor-pointer ">
                <a href="{{ url ('/Pendaftaran')}}" class="bg-[#E26868] w-36 text-center text-white text-lg font-bold p-2 rounded-lg hover:bg-[#ba5151]">Daftar
                    Sekarang</a>
            </div>
        </div>
        <div class="grid-cols-6">
            <img src="{{ asset ('Template-User/asset/profilee.png')}}" alt="" class="pt-[85px]">
        </div>
    </div>
</section>

<!-- ===== End Hero ===== -->

<!-- ===== Start Text Running ===== -->
<section id="TextRunning" class="bg-[#E26868]">
    <div class="container">
        <div class="">
            <marquee scrollamount="10" direction="left">
                <h1 class="text-white text-lg font-semibold p-1">Selamat Berlatih dan semangat mengejar impian
                    sehingga menjadi atlet profesional</h1>
            </marquee>
        </div>
    </div>
</section>
<!-- ===== End Text Running ===== -->

<!-- ===== Start Card Video ===== -->
<section id="Video">
    <div class="container">
        <div class="pt-40 font-poopins font-bold text-[48px] text-center text-[#BBBBBB]">
            <h1 class="border-b-4 border-[#FF8787] w-44 mx-auto">Kontent</h1>
        </div>
        <div class="flex gap-10 pt-[50px]">
            @foreach ($containt as $item)
            <div class="bg-white shadow-md shadow-gray-600 rounded-2xl w-96 h-[450px]">
                <div class="p-8">
                    <video class="w-full rounded-2xl mb-5" controls>
                        <source src="{{ asset('file_konten/' .$item->file) }}" type="video/mp4" class="">
                        Your browser does not support the video tag.
                    </video>
                    <span>{{ $item->tanggal }}</span>
                    <h1 class="font-bold text-[#767676] text-[18px]">{{(strlen($item->judul) > 5) ? substr ($item ->judul, 0, 45). "..." : $item ->judul}}</h1>
                    <p class="text-[#767676] text-lg">{{(strlen($item->deskripsi) > 5) ? substr ($item ->deskripsi, 0, 55). "..." : $item ->deskripsi}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ===== End Card Video ===== -->

<!-- ===== Start Prestasi ===== -->
<section id="Prestasi">
    <div class="container">

        <div class="pt-40 font-poopins font-bold text-[48px] text-center text-[#BBBBBB]">
            <h1 class="border-b-4 border-[#FF8787] w-44 mx-auto">Prestasi</h1>
        </div>

        <div id="default-carousel" class="relative pt-20" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-[596px]">
                @foreach ($atlet as $item)
                    <div class="flex" data-carousel-item>
                    <div class="">
                        <img src="{{ asset('foto_atlet/' .$item->foto) }}" class="rounded-lg w-[853px] h-[496px] object-fill items-center" alt="...">
                    </div>
                    <div class="bg-gray-200 md:h-[420px] mt-10 rounded-2xl ml-[-70px] w-[420px]">
                        <div class="p-10 text-center font-poopins">
                            <h1 class="font-bold text-3xl text-[#767676]">{{ $item->nama}}</h1>
                            <h2 class="font-semibold text-xl text-[#767676]">{{ $item->level->level}}</h2>
                            <p class="text-[#767676] mt-10 ">{{(strlen($item->prestasi) > 5) ? substr ($item ->prestasi, 0, 245). "..." : $item ->prestasi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Item 1 -->
                
                
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-16 left-1/2">
                    <button type="button" class="w-4 h-4 bg-[#818181] rounded-full hover:bg-[#E26868]" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-4 h-4 bg-[#818181] rounded-full hover:bg-[#E26868]" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-4 h-4 bg-[#818181] rounded-full hover:bg-[#E26868]" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute -top-16 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-[#8F8F8F] dark:bg-gray-800/30 group-hover:bg-[#c3c3c3] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white hover:text-[#7D7D7D] sm:w-6 sm:h-6 dark:text-gray-800"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute -top-16 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-[#8F8F8F] dark:bg-gray-800/30 group-hover:bg-[#c3c3c3] dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white hover:text-[#7D7D7D] sm:w-6 sm:h-6 dark:text-gray-800"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
</section>
<!-- ===== End Prestasi ===== -->

@endsection