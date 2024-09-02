/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                navy: "#002366", // Warna Utama
                lightblue: "#87CEFA", // Warna Sekunder
                orange: "#FFA500", // Warna Sekunder
                white: "#FFFFFF", // Warna Tambahan
                grey: "#F5F5F5", // Warna Tambahan
            },
            backgroundColor: (theme) => ({
                ...theme("colors"), // Menambahkan semua warna ke background
                primary: "#002366", // Navy Blue sebagai warna utama
                secondary: "#87CEFA", // Light Blue sebagai warna sekunder
                accent: "#FFA500", // Orange sebagai warna aksen
                light: "#FFFFFF", // Putih sebagai warna terang
                neutral: "#F5F5F5", // Grey sebagai warna netral
            }),
            fontFamily: {
                sans: ["Poppins", "sans-serif"], // Menggunakan Poppins sebagai font utama
            },
        },
    },
    plugins: [],
};
