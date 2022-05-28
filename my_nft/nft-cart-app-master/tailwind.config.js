module.exports = {
  mode: 'jit',
  purge: [
    './public/index.html'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container : {
      center : true,
      padding : {
        DEFAULT : '1.2rem'
      }
    },
    extend: {
      colors : {
        primary: {
          'soft-blue': 'hsl(215, 51%, 70%)',
          'cyan' : 'hsl(178, 100%, 50%)',
        },
        neutral: {
          'dark-blue-bg' : 'hsl(217, 54%, 11%)',
          'dark-blue-card' : 'hsl(216, 50%, 16%)',
          'dark-blue-line' : 'hsl(215, 32%, 27%)'
        }
      },
      fontFamily : {
        'sans' : ['Outfit', 'sans-serif']
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
