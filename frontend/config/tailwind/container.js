const plugin = require('tailwindcss/plugin')

module.exports = plugin(function ({ addUtilities }) {
  const newUtilities = {
    '.container': {
      width: '100%',
      marginRight: 'auto',
      marginLeft: 'auto',
      paddingRight: '16px',
      paddingLeft: '16px',

      '@screen md': {
        paddingRight: '32px',
        paddingLeft: '32px',
      },
    },
  }

  addUtilities(newUtilities, {
    variants: ['responsive'],
  })
})
