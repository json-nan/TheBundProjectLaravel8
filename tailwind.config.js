const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",
    purge: {
        enabled: true,
        content: [
            "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
            "./vendor/laravel/jetstream/**/*.blade.php",
            "./storage/framework/views/*.php",
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
        ],
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ["DM Sans", "Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#000033",
                secondary: "#F33A28",
                accent: "#686899",
                neutral: "#ECECEC",
            },
            minHeight: {
                0: "0",
                "1/4": "25%",
                "1/2": "50%",
                "3/4": "75%",
                full: "100%",
            },
            maxHeight: {
                0: "0",
                "1/4": "25%",
                "1/2": "50%",
                "3/4": "75%",
                full: "100%",
            },
            spacing: {
                100: "30rem",
            },
            maxWidth: {
                "1/4": "25%",
                "1/2": "50%",
                "3/4": "75%",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("tailwind-scrollbar"),
    ],

    variants: {
        scrollbar: ["rounded", "dark"],
    },
};
