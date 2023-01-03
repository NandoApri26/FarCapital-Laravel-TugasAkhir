@extends('Template-User.main')
@section('title', 'Pendaftaran')

@section('content')
<div class="mt-20 text-center font-poppins text-xl font-bold text-gray-500">
    <h1>Pendaftar</h1>
</div>
<div class="bg-gray-200 mt-10 p-5 w-[550px] mx-auto rounded-2xl font-poppins">

    <form method="POST" action="{{url('/User/Registration')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 ">
            <label for="nama_depan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Depan</label>
            <input type="text" id="nama_depan" name="nama_depan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[450px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Insert your nama depan" required>
        </div>
        <div class="mb-6 ">
            <label for="nama_belakang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Belakang</label>
            <input type="text" id="nama_belakang" name="nama_belakang" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[450px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Insert your nama belakang" required>
        </div>
        <div class="mb-6 ">
            <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[450px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Insert your nama lengkap" required>
        </div>
        <div class="mb-6 ">
            <label for="jenis_kelamin" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Kelamin</label>
            <div class="flex">
                <div class="flex items-center">
                    <input id="laki-laki" type="radio" value="laki-laki" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="laki-laki" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Laki-Laki</label>
                </div>
                <div class="flex items-center">
                    <input checked id="perempuan" type="radio" value="perempuan" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="perempuan" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                </div>
            </div>
        </div>

        <div class="mb-6 ">
            <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[450px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Insert your tempat_lahir" required>
        </div>

        <div class="mb-6 ">
            <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal_lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[450px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Insert your tanggal_lahir" required>
        </div>

        <div class="mb-6 ">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">alamat</label>
            <textarea type="date" id="alamat" name="alamat" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[450px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Insert your alamat" required></textarea>
        </div>

        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Foto</label>
            <input class="block w-[450px] text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" name="foto" id="foto">
        </div>


        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>

        <a href="{{ url ('/User/Home') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Back
            </span>
        </a>
    </form>

</div>
@endsection
