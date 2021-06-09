const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    colors:{
        ...colors,
        red: colors.red,
        white: colors.white,
        blueGray: {
            lightest:"#F7F9FC",
            light:'#A8C4E5',
            DEFAULT:"#678bb4",
            dark:"#0d3953",
            darkest:"#0F1617",
        },
        chillBlue: {
            DEFAULT: "#118CA0",
        },
        brandy:{
            light:'#D8B26A',
            DEFAULT:'#C9932E',
            dark: '#875800',
        }
    },
  },
  variants: {
    extend: {

    },
  },
  plugins: [],
}
