import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                anton: ["Anton", 'sans-serif'],
                robotoMono: ["Roboto Mono", "monospace"],
            },
        },
        colors: {
            'aqua': '#62929E',
            'dark-aqua': '#4A6D7C',
            'diara': '#CC7753',
            'dark-grey': '#414747',
            'grey': '#4E5555',
            'light': '#E6ECEC',
            'light-aqua': '#D1DFE2',
        },
        screens: {
            'xs': '314px',

            'sm': '640px',

            'md': '768px',
      
            'lg': '1024px',
          },
    },

    plugins: [forms],
};