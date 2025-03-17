/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php", 
    "./**/*.html",
    "./resources/**/*.js",
    "./src/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        hanken: ['Hanken Grotesk', 'sans-serif'],
        anton: ['Anton', 'sans-serif'],
        antonio: ['Antonio', 'sans-serif']
      },
      colors: {
        lightGreen: "#e7efe6",
        lightestGreen: "#fafdfa",
        brandGreen: "#4e844d",
        darkGreen: "#0c440a",
        grayTitle: "#6d6e71",
        grayBg: "#595959",
        brandTurquoise: "#026779"
      }
    },
  },
  plugins: [
    require('daisyui'),
    require('preline/plugin')
  ],
}

