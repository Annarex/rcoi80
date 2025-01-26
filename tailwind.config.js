import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'changeling': ['Changeling Neo Stencil', 'sans-serif'],
                'ubuntu': ['Ubuntu','Arial','sans-serif'],
            },
            fontSize: {
                'ext_xl': ['1.625rem', {
                  lineHeight: '1.5',
                //   letterSpacing: '-0.01em',
                  fontWeight: '300',
                }],
                'ext_sm': ['1.25rem', {
                  lineHeight: '1.55',
                //   letterSpacing: '-0.01em',
                  fontWeight: '300',
                }],
            },
        },
        
    },
    plugins: [
        require('flowbite/plugin'),
        [forms],
],
};
