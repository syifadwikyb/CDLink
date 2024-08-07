/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode:'class',
  theme: {
    extend: {
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],
      },
      gridTemplateColumns: {
        'cb': 'repeat(16, minmax(0, 1fr))', // 4 columns
      },
      colors:{
        'purple': '#AF379F',
        'purple-opacity': 'rgba(108, 1, 95, 0.3)',
        'light': '#F5F5F5',
        'dark': '#000000', 
        'biru': '#40048E',
        'abu': '#B2A7A7',
        'birutua':'#440882',
      },
      backgroundImage: {
        'customgradient': 'linear-gradient(180deg, #8D42B1 0%, #B3369D 100%)',
        'customgradient1': 'linear-gradient(75deg, #310063 0%, #6400C9 100%)',
        'customgradient2': 'linear-gradient(75deg, #97CDF2 0%, #7C47C8 100%)',
        'customgradient3': 'linear-gradient(90deg, #8D42B1 0%, #B3369D 100%)',
      },      
    },
  },
  plugins: [],
}