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
    divideWidth: {
      DEFAULT: '1px',
      '0': '0',
      '2': '2px',
     '3': '3px',
      '4': '4px',
     '6': '6px',
     '8': '8px',
    },
  },
  variants: {
    extend: {
          borderStyle: ['hover', 'focus','group-hover'],
          padding: ['hover', 'focus','group-hover'],
          minHeight: ['hover', 'focus','group-hover'],
          display:['hover','group-hover','focus','group-focus','focus-within'],
          backgroundColor: ['active'],

    },
  },
  plugins: [],
}
