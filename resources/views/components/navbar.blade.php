<!-- @props(['isDarkMode']) -->
<div class="sticky top-0 z-10">
    <nav x-data="{ isOpen: false }" class="bg-white/50 backdrop-blur-xl shadow dark:bg-slate-900/50 dark:border-slate-800 dark:border-b dark:backdrop-blur-xl">
        <div class="container px-16 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}">
                    <h4 class="text-slate-700 text-2xl font-bold hover:text-slate-900 dark:text-slate-100 dark:hover:text-slate-200 tracking-wide">Thecodenarsoft</h4>
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-slate-900 dark:text-sky-400 dark:hover:text-sky-300 hover:text-slate-700 " aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute mt-4 inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-slate-800  md:dark:bg-inherit md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a class="my-2 text-slate-700 transition-colors duration-300 transform dark:text-slate-300 hover:text-sky-500 dark:hover:text-sky-400 md:mx-4 md:my-0" href="#">
                        Projects
                    </a>
                    <a class="my-2 text-slate-700 transition-colors duration-300 transform dark:text-slate-300 hover:text-sky-500 dark:hover:text-sky-400 md:mx-4 md:my-0" href="#">
                        About
                    </a>
                    <a class="my-2 text-slate-700 transition-colors duration-300 transform dark:text-slate-300 hover:text-sky-500 dark:hover:text-sky-400 md:mx-4 md:my-0" href="#">
                        Contact
                    </a>
                    <button class="ml-6" @click="isDarkMode = ! isDarkMode">
                        <svg class="w-5 h-5 fill-slate-900 dark:fill-sky-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192l0 384c106 0 192-86 192-192zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</div>