<!-- @props(['isDarkMode']) -->
<div class="sticky top-0 z-10">
    <nav x-data="{ isOpen: false }" class="bg-white/50 backdrop-blur-xl dark:bg-slate-900/50 shadow-md  dark:shadow dark:shadow-slate-700 dark:backdrop-blur-xl">
        <div class="container px-16 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a href="{{ Route::currentRouteName() == 'contact' ? route('home') : '#home' }}">
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
                <div class="flex flex-col items-center justify-around gap-4 md:flex-row md:mx-6">
                    <a href="#my_projects" class="my-2 text-slate-700 transition-colors duration-300 transform dark:text-slate-300 hover:text-sky-500 dark:hover:text-sky-400 md:mx-4 md:my-0">
                        {{ __('Projects') }}
                    </a>
                    <a href="#about" class=" my-2 text-slate-700 transition-colors duration-300 transform dark:text-slate-300 hover:text-sky-500 dark:hover:text-sky-400 md:mx-4 md:my-0">
                        {{ __('About') }}
                    </a>
                    <a href="#contact" class="my-2 text-slate-700 transition-colors duration-300 transform dark:text-slate-300 hover:text-sky-500 dark:hover:text-sky-400 md:mx-4 md:my-0">
                        {{ __('Contact') }}
                    </a>

                    <!-- Language Button -->
                    <div x-data="{ isOpen: false }" class="relative inline-block ">
                        <!-- Dropdown toggle button -->
                        <button @click="isOpen = !isOpen" class="relative z-10 block p-2 text-slate-900 bg-white dark:bg-inherit  dark:text-slate-700  bg-inherit">
                            <svg class="w-5 h-5 fill-slate-900 hover:fill-slate-700 dark:fill-sky-400 dark:hover:fill-sky-300 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M0 128C0 92.7 28.7 64 64 64l192 0 48 0 16 0 256 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64l-256 0-16 0-48 0L64 448c-35.3 0-64-28.7-64-64L0 128zm320 0l0 256 256 0 0-256-256 0zM178.3 175.9c-3.2-7.2-10.4-11.9-18.3-11.9s-15.1 4.7-18.3 11.9l-64 144c-4.5 10.1 .1 21.9 10.2 26.4s21.9-.1 26.4-10.2l8.9-20.1 73.6 0 8.9 20.1c4.5 10.1 16.3 14.6 26.4 10.2s14.6-16.3 10.2-26.4l-64-144zM160 233.2L179 276l-38 0 19-42.8zM448 164c11 0 20 9 20 20l0 4 44 0 16 0c11 0 20 9 20 20s-9 20-20 20l-2 0-1.6 4.5c-8.9 24.4-22.4 46.6-39.6 65.4c.9 .6 1.8 1.1 2.7 1.6l18.9 11.3c9.5 5.7 12.5 18 6.9 27.4s-18 12.5-27.4 6.9l-18.9-11.3c-4.5-2.7-8.8-5.5-13.1-8.5c-10.6 7.5-21.9 14-34 19.4l-3.6 1.6c-10.1 4.5-21.9-.1-26.4-10.2s.1-21.9 10.2-26.4l3.6-1.6c6.4-2.9 12.6-6.1 18.5-9.8l-12.2-12.2c-7.8-7.8-7.8-20.5 0-28.3s20.5-7.8 28.3 0l14.6 14.6 .5 .5c12.4-13.1 22.5-28.3 29.8-45L448 228l-72 0c-11 0-20-9-20-20s9-20 20-20l52 0 0-4c0-11 9-20 20-20z" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="isOpen"
                            style="display:none"
                            x-cloak
                            @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute right-0 z-20 w-25  mt-2 origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-800">

                            <a href="locale/en" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">{{ __('English') }}</a>
                            <a href="locale/ru" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">{{ __('Russian') }}</a>
                            <a href="locale/tr" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">{{ __('Turkish') }}</a>
                        </div>
                    </div>
                    <!-- Dark mode button -->
                    <button class="" @click="isDarkMode = ! isDarkMode">
                        <svg class="w-5 h-5 fill-slate-900 hover:fill-slate-700  dark:fill-sky-400 dark:hover:fill-sky-300 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M448 256c0-106-86-192-192-192l0 384c106 0 192-86 192-192zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</div>