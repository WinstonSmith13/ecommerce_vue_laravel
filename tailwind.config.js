const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: '#137C8B',
                secondary: '#709CA7',
                tertiary: '#B8CBD0',
                quad: '#D9D9D9'
            },
            fontFamily: {
                primary: ['Poppins', 'ui-sans-serif', 'system-ui'],
                secondary: ['Roboto', 'ui-sans-serif', 'system-ui']
            },
            backgroundImage: {
            },
            spacing: {
                108: '27rem',
                120: '30rem'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
