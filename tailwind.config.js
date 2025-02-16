import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                serif: ['Merriweather', 'serif']
            },
            colors: {

                // (paragraph and text) text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300
                // title text-slate-900 tracking-tight dark:text-slate-200
                // backgrouncolor  bg-slate-900 
                // "primary": 'sky-400'
                // "primary-hover":"'sky-500"
                // 'title': "#F1F5F9",
                // 'paragraph': "#B1B7BF",
                // 'hover': "#CBD5E1",
                // 'bgPrimary': "#0F172A",      
            }
        },
    },
    darkMode: 'selector',
    plugins: [],
};
