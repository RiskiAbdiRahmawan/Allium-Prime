/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["InterVariable", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
                nunito: ["Nunito", "sans-serif"],
            },
            colors: {
                white: "#FFFF",
                navyblue: "#1A1A2E",
                deepblue: "#16213E",
                vividred: "#E94560",
                grayishblue: "#0F3460",
                Charcoal: "#2D3436",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
