@extends('Template-Admin.main')
@section('title', 'PB. Mandiri Palembang || Konten')
@section('content')

<div class="w-full px-6 py-6 mx-auto">
    <!-- table 1 -->

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class=" items-center">
                        <a href="{{ url ('/Admin/Containt/create') }}" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-gray-600 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Add Containt</a>
                    </div>
                    <h6 class="dark:text-white text-center">Containt</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Judul</th>
                                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Tanggal</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Deskripsi</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">File</th>
                                    <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($containt as $item)
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <h1 class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $item->judul }}</h1>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <h1 class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $item->tanggal }}</h1>
                                    </td>
                                    <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">
                                            {{(strlen($item->deskripsi) > 5) ? substr ($item ->deskripsi, 0, 45). "..." : $item ->deskripsi}}
                                        </p>
                                    </td>
                                    <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <div>
                                            <video class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out w-12 h-12 rounded-xl" controls>
                                                <source src="{{ asset('file_konten/' .$item->file) }}" type="video/mp4">
                                            </video>
                                        </div>
                                    </td>
                                    <td class="p-2 pt-5 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent flex items-center">
                                        <a href="{{ url('/Admin/Containt/' . $item->id ) }}"
                                            ><span class="fa-fw select-all fas text-blue-600"></span>
                                        </a>
                                        <a href="{{ url('/Admin/Containt/' . $item->id . '/edit')}}"><span
                                                class="fa-fw select-all fas text-orange-500"></span>
                                        </a>
                                        <form method="POST"
                                            action="{{ url('/Admin/Containt/' . $item->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"><span
                                                    class="fa-fw select-all fas text-red-600"></span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
