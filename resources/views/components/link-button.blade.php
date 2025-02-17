@props(["url" => "#"])

<div class="text-center lg:text-start">
    <a {{ $attributes->merge([
    'href' => $url, 
    'class' => 'w-full tracking-wider text-white uppercase transition-colors duration-300 transform bg-slate-700 rounded-lg lg:w-auto hover:bg-slate-900 focus:outline-none dark:bg-sky-500 dark:hover:bg-sky-400'
    ])}}>
        {{ $slot }}
    </a>
</div>