/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  theme: {},
  plugins: [],
}


module.exports = {
  theme: {
    extend: {
      screens: {
        '3xl': '1600px',
        '4xl': '1800px'
      },
    },
  },
  variants: {},
  plugins: [],
}