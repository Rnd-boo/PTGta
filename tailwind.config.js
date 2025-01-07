import defaultTheme from "tailwindcss/defaultTheme";

const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                "loop-scroll": "loop-scroll 50s linear infinite",
            },
            keyframes: {
                "loop-scroll": {
                    from: { transform: " translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
            },
            fontFamily: {
                body: [
                    "Inter",
                    "ui-sans-serif",
                    "system-ui",
                    "-apple-system",
                    "system-ui",
                    "Segoe UI",
                    "Roboto",
                    "Helvetica Neue",
                    "Arial",
                    "Noto Sans",
                    "sans-serif",
                    "Apple Color Emoji",
                    "Segoe UI Emoji",
                    "Segoe UI Symbol",
                    "Noto Color Emoji",
                ],
                noto: ["Noto Sans"],
            },
            textUnderlineOffset: {
                32: "31px",
                35: "35px",
            },
            backgroundImage: {
                "hero-pattern": "url('/img/homepage.png')",
            },
            height: {
                128: "45rem",
                100: "25rem",
            },
            colors: {
                california: "#fa9d05",
                primary: {
                    50: "#fff7ed",
                    100: "#ffedd5",
                    200: "#fed7aa",
                    300: "#fdba74",
                    400: "#fb923c",
                    500: "#f97316",
                    600: "#ea580c",
                    700: "#c2410c",
                    800: "#9a3412",
                    900: "#7c2d12",
                    950: "#431407",
                },
            },
        },
    },
    plugins: [],
};
