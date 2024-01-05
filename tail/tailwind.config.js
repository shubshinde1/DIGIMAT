/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: "jit",
  purge: ["../*.{html,php}"],
  content: ["../*.{html,php}"],
  theme: {
    extend: {},
  },
  plugins: [],
}