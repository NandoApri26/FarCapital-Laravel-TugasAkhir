@extends('Template-Admin.main')
@section('title', 'PB. Mandiri Palembang || Update Coach')
@section('content')

<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="flex text-center">
                        <p class="mb-0 dark:text-white/80 text-center">Update Table Coach</p>
                    </div>
                </div>
                <form action="{{ url ('/Admin/Coach/' .$coach->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="flex-auto p-6">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nama" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama</label>
                                    <input type="text" name="nama"  class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" placeholder="Masukkan nama" value="{{ $coach->nama }}"/>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tanggal_lahir" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" value="{{ $coach->tanggal_lahir }}" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3  md:w-6/12 ">
                                <label for="jk" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Kelamin</label>
                                <div class="flex">
                                    <div class="flex items-center">
                                        <input id="Laki-Laki" type="radio" value="{{ $coach->jk }}" name="jk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="Laki-Laki" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-Laki</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked id="Perempuan" type="radio" value="{{ $coach->jk }}" name="jk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="Perempuan" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="alamat" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Alamat</label>
                                    <textarea type="date" name="alamat" value="jesse@example.com" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" placeholder="Masukkan alamat lengkap">{{ $coach->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3  md:w-6/12 ">
                                <label for="status" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status</label>
                                <div class="flex">
                                    <div class="flex items-center">
                                        <input id="Aktif" type="radio" value="{{ $coach->status }}" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="Aktif" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aktif</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked id="Tidak Aktif" type="radio" value="{{ $coach->status }}" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="Tidak Aktif" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak Aktif</label>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="foto" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Foto</label>
                                    <input type="file" name="foto" id="foto"  class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0 flex gap-11">
                                <div class="flex items-center">
                                    <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Update</button>
                                </div>
                                <div class="flex items-center">
                                    <a href="{{ url ('/Admin/Coach') }}" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-gray-600 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Cancel</a>
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
