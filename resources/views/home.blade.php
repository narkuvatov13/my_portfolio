<x-app>
    <!-- Hero Section -->
    <section class="py-10">
        <div class="container  mx-auto">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-1/2 mb-32">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold leading-relaxed tracking-wide text-slate-900 dark:text-slate-200 lg:text-4xl">{{ __('My Name is :Name',['Name'=>'Yusup']) }}<br> {{ __('I am') }} <span class="text-sky-500 ">Thecodenarsoft.</span></h1>

                        <p class="mt-3 mb-8 text-slate-900  dark:text-slate-400 text-md leading-relaxed tracking-wide">
                            {{ __('I’m a Full Stack Developer who loves coding, finding creative solutions to problems, and building great projects.') }} <br>
                            {{ __('I’m passionate about web technologies and develop powerful, high-performance, and user-friendly applications using modern tools like Laravel, Livewire, Alpinejs and Tailwind CSS.') }} <br>
                        </p>
                        <x-link-button class="px-6 py-4 text-sm">
                            {{ __('My Projects') }}
                        </x-link-button>
                    </div>
                </div>

                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2  ">
                    <img class=" object-cover object-center rounded-full w-full h-48   md:h-[20rem] md:w-[20rem]  md:block xl:h-[35rem] xl:w-[35rem]  lg:max-w-3xl  " src="{{ asset('images/user/yusup1.jpg') }}" alt="user-hero-img">
                </div>+
            </div>
        </div>
    </section>

    <!-- About Me -->
    <section id="about" class="py-10">
        <div class="container mx-auto">
            <div class="items-center lg:flex">
                <div class="hidden md:block lg:w-1/2 w-full mt-6 lg:mt-0 ">
                    <div class="md:flex items-center justify-center">
                        <img style="clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);" class=" cursor-pointer opacity-95 hover:opacity-100 transition-allduration-500 object-cover object-center md:h-[17rem] md:w-[20rem]  md:max-w-3xl  shadow-2xl shadow-sky-300 " src="{{ asset('images/user/yusup3.jpg') }}" alt="user-hero-img">
                    </div>
                    <div class=" md:flex items-center justify-center   ">
                        <img style="clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);" class="cursor-pointer  opacity-85 hover:opacity-100 transition-all duration-500 md:h-[17rem] md:w-[20rem] object-cover object-top  md:max-w-3xl " src="{{ asset('images/user/yusup2.jpg') }}" alt="user-hero-img">
                        <img style="clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);" class=" cursor-pointer opacity-85 hover:opacity-100 transition-all duration-500 object-cover object-center md:h-[17rem] md:w-[20rem]  md:max-w-3xl " src="{{ asset('images/user/yusup1.jpg') }}" alt="user-hero-img">
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold leading-relaxed tracking-wide text-slate-900 dark:text-slate-200 lg:text-4xl"> <br> {{ __('About Me') }}</h1>

                        <p class="mt-3 mb-8 text-slate-700  dark:text-slate-400 text-md leading-relaxed tracking-wide">
                            {{ __('I am a professional passionate about software development and design.') }}
                            {{ __('After my software engineering education, I focused on web application development.') }}
                            {!! __('tech_message',['php'=>'<span class="text-sky-300 font-bold">PHP</span>','js'=>'<span class="text-sky-300 font-bold">JavaScript</span>']) !!}
                        </p>
                        <p class="mt-3 mb-8 text-slate-700  dark:text-slate-400 text-md leading-relaxed tracking-wide">
                            {{ __('As someone who is always open to learning, I take care to keep myself updated about new technologies and trends.') }}
                            {{ __('I aim to combine aesthetics and functionality in my projects.') }}
                            {{ __('Thanks to my teamwork and problem-solving skills, I work efficiently with teams from different disciplines.') }}

                        </p>
                        <p class="mt-3 mb-8 text-slate-900  dark:text-slate-400 text-md leading-relaxed tracking-wide">
                            {{ __("My goal is to use technology to create solutions that will make people's lives easier.") }}
                            {{ __('The projects in my portfolio are a reflection of this passion and professional approach.') }}
                            {{ __('For more information and to see my projects in detail, please browse the sections below.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--My Projects Section -->
    <section id="my_projects" class=" bg-white dark:bg-slate-900 py-10">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-center leading-relaxed tracking-wide text-dark-900 capitalize lg:text-4xl dark:text-slate-200">{{ __('My Recent Projects') }}</h1>

            <p class="max-w-2xl mx-auto my-2 text-center text-slate-700 dark:text-slate-400 tracking-wide">
                {{ __('Every project is a new learning and development opportunity. Even if you take small steps at the beginning, each line of code takes you further. The important thing is not to start perfectly, but to keep moving forward. Never stop experimenting, exploring and creating!') }}
            </p>


            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">

                <div class="relative flex flex-col items-center justify-center rounded-xl shadow-md shadow-slate-300 dark:shadow-slate-700">

                    <img class="object-cover w-full h-48 md:h-64 rounded-t-xl" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                    <div class="w-full  text-center bg-inherit p-2 ">
                        <h1 class="md:text-2xl font-semibold text-slate-900 capitalize dark:text-slate-200 tracking-wide ">arthur melo</h1>

                        <p class=" capitalize text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 cursor-pointer ">design directora</p>

                        <div class="flex justify-end items-center m-1 mx-2">

                            <a href="https://github.com/narkuvatov13" target="_blank" class="mx-2 text-slate-700 transition-colors duration-300 dark:text-slate-300 hover:text-sky-400 dark:hover:text-sky-500" aria-label="Github">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                    </path>
                                </svg>
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="">
        <div class="container px-6 pb-6 mx-auto">
            <div class="lg:flex lg:items-center lg:-mx-6">
                <div class="lg:w-1/2 lg:mx-6">
                    <h1 class="text-xl font-semibold text-slate-900 capitalize dark:text-slate-200 lg:text-3xl">
                        {{ __('Contact us for more info') }}
                    </h1>
                </div>

                <div class="mt-8 lg:w-1/2 lg:mx-6">
                    <div class="w-full px-0 md:px-8 py-10 mx-auto overflow-hidden  md:bg-white md:rounded-lg md:shadow-2xl md:dark:bg-slate-900 lg:max-w-xl md:shadow-slate-700/50 md:dark:shadow-black/50">
                        <h1 class="text-md font-medium text-slate-900 dark:text-slate-200">{{ __('What do you want to ask') }}</h1>

                        <form class="mt-6" enctype="multipart/form-data" action="{{ route('contact.store')}}" method="POST">
                            @csrf
                            <div class="flex-1">
                                <label class="block mb-2 text-sm text-slate-900 dark:text-slate-200">{{ __('Full Name') }}</label>
                                <input type="text" name="name" class="block w-full px-5 py-3 mt-2 text-slate-900 placeholder-slate-400 bg-white border border-slate-200 rounded-md dark:placeholder-slate-700 dark:bg-slate-900 dark:text-gray-300 dark:border-slate-700 focus:border-sky-500 dark:focus:border-sky-500 focus:ring-sky-500 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="flex-1 mt-6">
                                <label class="block mb-2 text-sm text-slate-900 dark:text-slate-200">{{ __('Email address') }}</label>
                                <input type="text" name="email" class="block w-full px-5 py-3 mt-2 text-slate-900 placeholder-slate-400 bg-white border border-slate-200 rounded-md dark:placeholder-slate-700 dark:bg-slate-900 dark:text-gray-300 dark:border-slate-700 focus:border-sky-500 dark:focus:border-sky-500 focus:ring-sky-500 focus:outline-none focus:ring focus:ring-opacity-40" required />
                                @error('email')
                                <p class="text-sm text-red-600">{{ __($message )}}</p>
                                @enderror
                            </div>

                            <div class="w-full mt-6">
                                <label class="block mb-2 text-sm text-slate-900 dark:text-slate-200">{{ __('Message') }}</label>
                                <textarea name="message" class="block w-full  px-5 py-3 mt-2 text-slate-900 placeholder-slate-400 bg-white border border-slate-200 rounded-md dark:placeholder-slate-700 dark:bg-slate-900 dark:text-gray-300 dark:border-slate-700 focus:border-sky-500 dark:focus:border-sky-500 focus:ring-sky-500 focus:outline-none focus:ring focus:ring-opacity-40"></textarea>
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

</x-app>