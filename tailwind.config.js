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
        
        red: colors.red,
        blueGray: {
            lightest:"#F7F9FC",
            light:'#A8C4E5',
            DEFAULT:"#678bb4",
            dark:"#0F1617",
        },
    },
  },
  variants: {
    extend: {

    },
  },
  plugins: [],
}
