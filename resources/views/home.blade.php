<x-app>
    <!-- Hero Section -->
    <section class="py-10">
        <div class="container  mx-auto">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold leading-relaxed tracking-wide text-slate-700 dark:text-white lg:text-4xl">{{ __('My Name is :Name',['Name'=>'Yusup']) }}<br> {{ __('I am') }} <span class="text-sky-500 ">Thecodenarsoft.</span></h1>

                        <p class="mt-3 mb-8 text-slate-900  dark:text-gray-400 text-md leading-relaxed tracking-wide">
                            {{ __('I’m a Full Stack Developer who loves coding, finding creative solutions to problems, and building great projects.') }} <br>
                            {{ __('I’m passionate about web technologies and develop powerful, high-performance, and user-friendly applications using modern tools like Laravel, Livewire, Alpinejs and Tailwind CSS.') }} <br>
                        </p>
                        <x-link-button class="px-6 py-4 text-sm">
                            {{ __('My Projects') }}
                        </x-link-button>
                    </div>
                </div>

                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2  ">
                    <img class="hidden object-cover object-center rounded-full  md:h-[20rem] md:w-[20rem]  md:block xl:h-[35rem] xl:w-[35rem]  lg:max-w-3xl  " src="{{ asset('images/user/yusup1.jpg') }}" alt="user-hero-img">
                </div>
            </div>
        </div>
    </section>

    <!-- About Me -->
    <section class="py-10">
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
                        <h1 class="text-3xl font-semibold leading-relaxed tracking-wide text-slate-700 dark:text-white lg:text-4xl"> <br> {{ __('About Me') }}</h1>

                        <p class="mt-3 mb-8 text-slate-900  dark:text-gray-400 text-md leading-relaxed tracking-wide">
                            {{ __('I am a professional passionate about software development and design.') }}
                            {{ __('After my software engineering education, I focused on web application development.') }}
                            {!! __('tech_message',['php'=>'<span class="text-sky-300 font-bold">PHP</span>','js'=>'<span class="text-sky-300 font-bold">JavaScript</span>']) !!}
                        </p>
                        <p class="mt-3 mb-8 text-slate-900  dark:text-gray-400 text-md leading-relaxed tracking-wide">
                            {{ __('As someone who is always open to learning, I take care to keep myself updated about new technologies and trends.') }}
                            {{ __('I aim to combine aesthetics and functionality in my projects.') }}
                            {{ __('Thanks to my teamwork and problem-solving skills, I work efficiently with teams from different disciplines.') }}

                        </p>
                        <p class="mt-3 mb-8 text-slate-900  dark:text-gray-400 text-md leading-relaxed tracking-wide">
                            {{ __("My goal is to use technology to create solutions that will make people's lives easier.") }}
                            {{ __('The projects in my portfolio are a reflection of this passion and professional approach.') }}
                            {{ __('For more information and to see my projects in detail, please browse the sections below.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-app>