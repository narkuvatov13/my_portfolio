<x-app>
    <!-- Hero Section -->
    <section class="my-10">
        <div class="container  mx-auto">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold leading-relaxed tracking-wide text-slate-700 dark:text-white lg:text-4xl">My Name is Yusup <br> I am <span class="text-sky-500 ">Thecodenarsoft.</span></h1>

                        <p class="mt-3 text-slate-900  dark:text-gray-400 text-md leading-relaxed tracking-wide">
                            I’m a Full Stack Developer who loves coding, finding creative solutions to problems, and building great projects. <br>
                            I’m passionate about web technologies and develop powerful, high-performance, and user-friendly applications using modern tools like Laravel, Livewire, Alpinejs and Tailwind CSS. <br>
                        </p>

                        <button class="w-full px-6 py-4 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-slate-700 rounded-lg lg:w-auto hover:bg-slate-900 focus:outline-none dark:bg-sky-500 dark:hover:bg-sky-400">My Projects</button>
                    </div>
                </div>

                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2  ">
                    <img class=" h-[550px] w-4/5 object-cover object-center lg:max-w-3xl rounded-full " src="{{ asset('images/user/yusup1.jpg') }}" alt="user-hero-img">
                </div>
            </div>
        </div>
    </section>

</x-app>