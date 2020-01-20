const { fontFamily } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
      extend: {
          fontFamily: {
              serif: ['Nunito', ...fontFamily.serif]
          },
      }
  },
  variants: {
    padding: ['responsive', 'first', 'last', 'hover', 'focus'],
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
  ]
}
