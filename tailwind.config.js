const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    backgroundColor: theme => ({
      ...theme('colors'),
    }),
    minWidth: {
      '0': '0',
      '1/4': '25%',
      '1/2': '50%',
      '3/4': '75%',
      'full': '100%',
    },
    colors:{
        ...colors,
        xred: {
            lightest:"#FFE4E4",
            light:"#FFBBBB",
            DEFAULT:"#E36E6E",
            dark:"#710000",
            
        },
        blueGray: {
            lightest:"#F7F9FC",
            light:'#A8C4E5',
            DEFAULT:"#678bb4",
            dark:"#0d3953",
            darkest:"#0F1617",
        },
        chillBlue: {
            lightest:'#D9F3F8',
            lighter:'#B2E5EE',
            light:'#99D6E1',
            DEFAULT: "#118CA0",
            dark:'#00717D',
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
