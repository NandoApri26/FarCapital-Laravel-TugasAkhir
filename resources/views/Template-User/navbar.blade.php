<nav class="py-5 bg-white font-poppins border-gray-200 dark:bg-gray-900 dark:border-gray-700">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="flex items-center">
            <img src="{{asset('Template-User/asset/PB.-Mandiri-Palembang.png')}}" class="h-6 mr-3 sm:h-10" alt="PB. Mandiri Palembang" />
        </a>
        <div class="flex md:order-2 font-bold">
            <a href="{{ url ('/User/Pendaftaran/create')}}"
                class="text-[#767676] p-2 rounded-lg bg-white shadow-lg shadow-gray-500/50 hover:bg-white hover:shadow-lg hover:shadow-gray-700/50 hover:text-gray-600">Daftar
                pelatihan</a>
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center  justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-base md:font-semibold md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ url ('/User/Home') }}"
                        class="block py-2 pl-3 pr-4 text-[#767676] bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ url ('User/Tentang-Kami')}}"
                        class="block py-2 pl-3 pr-4 text-[#767676] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                        Kami</a>
                </li>
                <li>
                    <a href="{{ url ('User/Atlet')}}"
                        class="block py-2 pl-3 pr-4 text-[#767676] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Atlet</a>
                </li>
            </ul>
        </div>
    </div>
</nav>