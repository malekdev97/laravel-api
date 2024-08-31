<!-- ======== HEADER ======== -->
    <header class="text-neutral-700 body-font bg-neutral-300 dark:bg-neutral-950">
        <div class="container w-2/3 mx-auto  flex flex-wrap p-5 flex-col md:flex-row items-center ">
            <a class="flex title-font font-medium items-center text-neutral-900 mb-4 md:mb-0 " href="">
                <img src="images/logo.svg" alt="logo" class="w-10 h-10 rounded-full">
                <span class="ml-3 text-xl dark:text-neutral-200 font-bold text-neutral-900 underline">Abdulmalik</span>
            </a>
            <nav
                class="dark:text-neutral-200 text-neutral-900 md:ml-auto flex flex-wrap items-center text-base justify-center  mr-4 ">
                <a href="/" class="{{ request()->is('/') ? 'text-cyan-600'  : '' }} mr-5 font-bold hover:text-neutral-900 dark:hover:text-neutral-300 underline">Home</a>
                <a href="/about" class="{{ request()->is('about') ? 'text-cyan-600'  : '' }} mr-5 font-bold hover:text-neutral-900 dark:hover:text-neutral-300 underline">About</a>
                <a href="/contact" class="{{ request()->is('contact') ? 'text-cyan-600'  : '' }} mr-5 font-bold hover:text-neutral-900 dark:hover:text-neutral-300 underline">Contact</a>
                <a href="/jobs" class="{{ request()->is('jobs') ? 'text-cyan-600'  : '' }} mr-5 font-bold hover:text-neutral-900 dark:hover:text-neutral-300 underline">Jobs</a>
            </nav>
            <button class="moon h-12 w-12 rounded-lg p-2 hover:bg-gray-100 dark:hover:bg-neutral-700">
                <svg class="fill-violet-700 block dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
            </button>
            <button class="sun h-12 w-12 rounded-lg p-2 hover:bg-gray-100 dark:hover:bg-neutral-700">

                <svg class="fill-yellow-500 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>

        </div>
    </header>
