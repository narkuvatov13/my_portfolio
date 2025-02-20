<x-app>

    <!-- contact -->
    <section class="">
        <div class="container px-6 pb-6 mx-auto">
            <div class="lg:flex lg:items-center lg:-mx-6">
                <div class="lg:w-1/2 lg:mx-6">
                    <h1 class="text-2xl font-semibold text-slate-900 capitalize dark:text-slate-200 lg:text-3xl">
                        {{ __('Contact us for more info') }}
                    </h1>

                    <div class="mt-6 space-y-8 md:mt-8">
                        <!-- <p class="flex items-start -mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-400">
                                Cecilia Chapman 711-2880 Nulla
                                St. Mankato Mississippi 96522
                            </span>
                        </p> -->

                        <!-- <p class="flex items-start -mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-400">(257) 563-7401</span>
                        </p> -->

                        <!-- <p class="flex items-start -mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-400">acb@example.com</span>
                        </p> -->
                    </div>


                </div>

                <div class="mt-8 lg:w-1/2 lg:mx-6">
                    <div class="w-full px-8 py-10 mx-auto overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-slate-900 lg:max-w-xl shadow-slate-700/50 dark:shadow-black/50">
                        <h1 class="text-lg font-medium text-slate-900 dark:text-slate-200">{{ __('What do you want to ask') }}</h1>

                        <form class="mt-6" enctype="multipart/form-data" action="{{ route('contact.store')}}" method="POST">
                            @csrf
                            <div class="flex-1">
                                <label class="block mb-2 text-sm text-slate-900 dark:text-slate-200">{{ __('Full Name') }}</label>
                                <input type="text" name="name" placeholder="John Doe" class="block w-full px-5 py-3 mt-2 text-slate-900 placeholder-slate-400 bg-white border border-slate-200 rounded-md dark:placeholder-slate-700 dark:bg-slate-900 dark:text-gray-300 dark:border-slate-700 focus:border-sky-500 dark:focus:border-sky-500 focus:ring-sky-500 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="flex-1 mt-6">
                                <label class="block mb-2 text-sm text-slate-900 dark:text-slate-200">{{ __('Email address') }}</label>
                                <input type="text" name="email" placeholder="johndoe@example.com" class="block w-full px-5 py-3 mt-2 text-slate-900 placeholder-slate-400 bg-white border border-slate-200 rounded-md dark:placeholder-slate-700 dark:bg-slate-900 dark:text-gray-300 dark:border-slate-700 focus:border-sky-500 dark:focus:border-sky-500 focus:ring-sky-500 focus:outline-none focus:ring focus:ring-opacity-40" required />
                                @error('email')
                                <p class="text-sm text-red-600">{{ __($message )}}</p>
                                @enderror
                            </div>

                            <div class="w-full mt-6">
                                <label class="block mb-2 text-sm text-slate-900 dark:text-slate-200">{{ __('Message') }}</label>
                                <textarea name="message" class="block w-full  px-5 py-3 mt-2 text-slate-900 placeholder-slate-400 bg-white border border-slate-200 rounded-md dark:placeholder-slate-700 dark:bg-slate-900 dark:text-gray-300 dark:border-slate-700 focus:border-sky-500 dark:focus:border-sky-500 focus:ring-sky-500 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                            </div>

                            <button type="submit" class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-sky-500 rounded-md hover:bg-sky-400 focus:outline-none focus:ring focus:ring-sky-300 focus:ring-opacity-50">
                                {{ __('Send') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot:script>
        <script>
            @if(session('status'))
            toastr.success("{{ __(session('status')) }}");
            @endif

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
    </x-slot:script>
</x-app>