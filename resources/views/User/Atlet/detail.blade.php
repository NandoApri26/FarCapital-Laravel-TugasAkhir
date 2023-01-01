@extends('Template-User.main')
@section('title', 'PB. Mandiri Palembang || Detail Atlet')
@section('content')



<!-- ===== Start Detail Atlet ===== -->
<section id="Detail">
    <div class="container py-20">
        <h2 class="text-center text-[45px] text-gray-600">Profile Atlet</h2>
        <div class="max-w-sm mx-auto mt-10 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-96" src="{{asset('foto_atlet/' . $atlet->foto)}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $atlet -> nama }}
                    </h5>
                </a>
                <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
                    {{ $atlet -> tanggal_lahir }}
                </p>
                <h6 class="mb-2 font-normal text-gray-700 dark:text-gray-400">
                    {{ $atlet -> jk }}
                </h6>
                <h6 class="mb-2 font-normal text-gray-700 dark:text-gray-400">
                    {{ $atlet -> level -> level }}
                </h6>
                <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
                    {{ $atlet -> alamat }}
                </p>
                <p class="mb-2 font-semibold text-gray-700 dark:text-gray-400">
                    {{ $atlet -> prestasi }}
                </p>
                <a href="{{ url ('/User/Atlet') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Kembali
                    </span>
                </a>
            </div>
        </div>
    
    </div>
</section>
<!-- ===== End Detail Atlet ===== -->

@endsection
