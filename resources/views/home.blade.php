<x-app>
    <!-- Hero Section -->
    <section class="my-10">
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
    <section>
        <div class="container mx-auto">
            <div class="items-center lg:flex">
                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2  ">
                    <img class="hidden object-cover object-center rounded-full  md:h-[20rem] md:w-[20rem]  md:block xl:h-[35rem] xl:w-[35rem]  lg:max-w-3xl " src="{{ asset('images/user/yusup1.jpg') }}" alt="user-hero-img">
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold leading-relaxed tracking-wide text-slate-700 dark:text-white lg:text-4xl"> <br> {{ __('I am') }} <span class="text-sky-500 ">Thecodenarsoft.</span></h1>

                        <p class="mt-3 mb-8 text-slate-900  dark:text-gray-400 text-md leading-relaxed tracking-wide">
                            {{ __('I’m a Full Stack Developer who loves coding, finding creative solutions to problems, and building great projects.') }} <br>
                            {{ __('I’m passionate about web technologies and develop powerful, high-performance, and user-friendly applications using modern tools like Laravel, Livewire, Alpinejs and Tailwind CSS.') }} <br>
                        </p>
                        <x-link-button class="px-6 py-4 text-sm">
                            {{ __('My Projects') }}
                        </x-link-button>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-app>