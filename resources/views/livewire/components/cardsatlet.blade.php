<div class="max-w-[500px] p-6 mx-auto">
    <div class=" items-center">
        <a href="{{ url ('/Admin/Atlet') }}" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-gray-600 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Back</a>
    </div>
    <div class="flex flex-wrap mx-auto">

        <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            
                <img class="rounded-t-lg w-full h-120 object-cover " src="{{ asset('foto_atlet/' .$atlet->foto) }}" alt="" />

            <div class="p-10 text-center">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $atlet->nama}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $atlet->tanggal_lahir}}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $atlet->level->level}}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $atlet->alamat}}</p>
                <p class="mb-3 font-bold text-gray-700 dark:text-gray-400 text-left ">Prestasi <br>
                    <span class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $atlet->prestasi}}</span>
                </p>
            </div>
        </div>
    </div>
</div>