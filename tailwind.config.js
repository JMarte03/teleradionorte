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
        antonio: ['Antonio', 'sans-serif'],
        gothicExpanded: ['Special Gothic Expanded One', 'sans-serif'],
        encodeSans: ['Encode Sans Expanded', 'sans-serif'] 
      },
      colors: {
        lightGreen: "#e7efe6",
        lightestGreen: "#fafdfa",
        brandGreen: "#4e844d",
        darkGreen: "#0c440a",
        softGreen: "#4e734b",
        grayTitle: "#6d6e71",
        grayBg: "#595959",
        brandTurquoise: "#026779"
      },
      flexBasis: {
        '7/14': '49%',
        'almost-1/4': '24%'
      }
    },
  },
  plugins: [
    require('daisyui'),
    require('preline/plugin')
  ],
}

