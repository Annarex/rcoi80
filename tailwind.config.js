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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'changeling': ['Changeling Neo Stencil', 'sans-serif'],
            },

        },
        strokeWidth: {
            '1': '1',
            '2': '2',
            '4': '4',
            '8': '8',
          },
          colors: {
            customWhite: '#ffffff',
            customBlue: '#3b82f6',
          },
    },
    variants: {
        extend: {
          stroke: ['hover', 'focus'],
        },
      },
    plugins: [
        require('flowbite/plugin'),
        [forms],
],
};
