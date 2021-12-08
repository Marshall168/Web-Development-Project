const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: "#767B91",
                secondary: "#2A324B",
                highlight: "#F7C59F",
                lite: "#C7CCDB",
            },
            
        },

    

        fontFamily: {
            display: ["Nunito", "sans-serif"],
        },



    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
