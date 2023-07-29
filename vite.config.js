import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

import { config } from "dotenv";
// require("dotenv").config();
config();

export default defineConfig({
    server: {
        hmr: {
            // host: process.env.APP_URL || "localhost",
            host: process.env.APP_URL,
            // host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
