/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins : ["Poppins", "sans-serif"],
            },
            colors: {
                'background-color': '#4961A5',
            }
        },
    },
    plugins: [],
};
