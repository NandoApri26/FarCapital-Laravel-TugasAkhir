@extends('Template-Admin.main')
@section('title', 'PB. Mandiri Palembang || Atlet')
@section('content')

<div class="w-full px-6 py-6 mx-auto">
    <!-- table 1 -->

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class=" items-center">
                        <a href="{{ url ('/Admin/Atlet/create') }}" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-gray-600 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Add Atlet</a>
                    </div>
                    <h6 class="dark:text-white text-center">List Atlet</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Atlet</th>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Tanggal Lahir</th>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Jenis Kelamin</th>
                                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Level</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Alamat</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Prestasi</th>
                                    <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($atlet as $item)
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="{{ asset('foto_atlet/' .$item->foto) }}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user1" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ $item->nama }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <h1 class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $item->tanggal_lahir }}</h1>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <h1 class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $item->jk }}</h1>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <h1 class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $item->level->level }}</h1>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <h1 class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{(strlen($item->alamat) > 5) ? substr ($item ->alamat, 0, 25). "..." : $item ->alamat}}</h1>
                                        
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <h1 class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{(strlen($item->prestasi) > 5) ? substr ($item ->prestasi, 0, 25). "..." : $item ->prestasi}}</h1>
                                    </td>
                                    <td class="p-2 pt-5 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent flex items-center">
                                        <a href="{{ url('/Admin/Atlet/' . $item->id ) }}"
                                            ><span class="fa-fw select-all fas text-blue-600"></span>
                                        </a>
                                        <a href="{{ url('/Admin/Atlet/' . $item->id . '/edit')}}"><span
                                                class="fa-fw select-all fas text-orange-500"></span>
                                        </a>
                                        <form method="POST"
                                            action="{{ url('/Admin/Atlet/' . $item->id) }}">
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
