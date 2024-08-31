/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        background: "rgba(var(--background))",
        'body': '#17171F',
        'selected-text': '#A3A3FF',
        'theme': '#3F3FFF',
        'nav': '#404053',
        'secondary': '#9191A4',
        'badge': '#3F3F51',
        'input-border': '#565666',
        'input': '#2A2A35'
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
      },
      keyframes: {
        cbounce: {
          '0%, 100%': {transform: 'translateY(-35%)'},
          '50%': {transform: 'translateY(0)'}
        },
      },
      animation: {
        cbounce: 'cbounce 1s infinite',
      }
    },
  },
  plugins: ["tailwindcss ,autoprefixer"],
}
