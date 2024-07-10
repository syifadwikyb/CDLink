/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],
      },
      colors:{
        'purple': '#AF379F',
        'purple-opacity': 'rgba(108, 1, 95, 0.3)',
        'light': '#F5F5F5',
        'dark': '#000000', 
        'blue': '#40048E',
        'gray': '#B2A7A7',
      },
      backgroundImage: {
        'customgradient': 'linear-gradient(180deg, #8D42B1 0%, #B3369D 100%)',
        'customgradient2': 'linear-gradient(75deg, #97CDF2 0%, #7C47C8 100%)',
        'customgradient3': 'linear-gradient(90deg, #8D42B1 0%, #B3369D 100%)',
      },
      backgroundRepeat: {
        'no-repeat': 'no-repeat',
      },
    },
  },
  plugins: [],
}