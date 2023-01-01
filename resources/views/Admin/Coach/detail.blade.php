@extends('Template-Admin.main')
@section('title', 'PB. Mandiri Palembang || Detail Pelatih')
@section('content')
<div class="w-40 p-6 mx-auto">
    <div class=" items-center">
        <a href="{{ url ('/Admin/Coach') }}" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-gray-600 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Back</a>
    </div>
    <div class="flex flex-wrap mx-auto">

        <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="w-20 h-36">
                <img class="rounded-t-lg w-full  object-cover" src="{{ asset('foto_coach/' .$coach->foto) }}" alt="" />
            </div>

            <div class="p-10 text-center">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $coach->nama}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $coach->tanggal_lahir}}
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $coach->status}}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
