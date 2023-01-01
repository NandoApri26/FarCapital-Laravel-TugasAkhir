@extends('Template-User.main')
@section('title', 'PB. Mandiri Palembang || Atlet')
@section('content')



<!-- ===== Start List Atlet ===== -->
<section id="Atlet">
    <div class="container">
        <div class="pt-40 font-poopins font-bold text-[48px] text-center text-[#BBBBBB]">
            <h1 class="border-b-4 border-[#FF8787] w-180 mx-auto">List Atlet PB. Mandiri Palembang</h1>
        </div>

        <div class="overflow-x-auto relative mt-20 cursor-pointer ">
            <table class="w-full text-sm text-left  dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-[#FF8787] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-1 text-center">
                            No
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tanggal Lahir
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Prestasi
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Foto
                        </th>
                        <th scope="col" class="py-3 px-6">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($atlet as $item)
                    <tr class="bg-[#F5F5F5] border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="text-bold text-center">
                            {{ $loop->iteration }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $item->nama}}
                        </td>
                        <td class="py-4 px-6">
                            {{ $item->tanggal_lahir}}
                        </td>
                        <td class="py-4 px-6">
                            {{(strlen($item->prestasi) > 5) ? substr ($item ->prestasi, 0, 45). "..." : $item ->prestasi}}
                        </td>
                        <td class="py-4 px-6 ">
                            <img src="{{ asset('foto_atlet/' .$item->foto) }}" class="rounded-lg w-24 h-32 object-fill items-center mx-auto" alt="...">
                        </td>
                        <th scope="col" class="py-3 px-6">
                            <a href="{{ url('/User/Atlet/' . $item->id ) }}">
                                <h1 class="p-1 bg-blue-600 text-[18px] text-center text-white rounded-lg">Detail</h1>
                            </a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>
<!-- ===== End List Atlet ===== -->

@endsection
