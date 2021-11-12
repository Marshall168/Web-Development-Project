const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
        },
        fontFamily: {
            Montserrat: ["Montserrat, sans-serif"]
        },
        container: {
            center: true,
            padding: "1rem",
            screens : {
                lg: "1124px",
                xl: "1124px",
                "2xl": "1124px",
            }
        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
