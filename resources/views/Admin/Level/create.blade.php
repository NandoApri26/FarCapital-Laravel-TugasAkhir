@extends('Template-Admin.main')
@section('title', 'PB. Mandiri Palembang || Create Level')
@section('content')

<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="flex text-center">
                        <p class="mb-0 dark:text-white/80 text-center">Create Table Level</p>
                    </div>
                </div>
                <form action="{{ url ('/Admin/Level') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex-auto p-6">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="coach_id" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama</label>
                                    <select id="coach_id" name="coach_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <!-- using FOREIGN ID -->
                                        @foreach ($coach as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">

                                    <label for="level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Levels</label>
                                    <select id="level" name="level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a levels</option>
                                        <option value="junior" name="level">Junior</option>
                                        <option value="middle" name="level">Middle</option>
                                        <option value="senior" name="level">Senior</option>
                                    </select>

                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="lapangan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Lapangan</label>
                                    <input type="number" name="lapangan" id="lapangan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0 flex gap-11">
                                <div class="flex items-center">
                                    <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Create</button>
                                </div>
                                <div class="flex items-center">
                                    <a href="{{ url ('/Admin/Level') }}" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-gray-600 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
