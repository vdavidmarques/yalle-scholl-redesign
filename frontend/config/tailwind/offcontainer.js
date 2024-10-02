const plugin = require('tailwindcss/plugin')

module.exports = plugin(function ({ addUtilities, theme }) {
  const newUtilities = {
    '.offcontainer-center': {
      width: '100vw',
      transform: 'translateX(-1rem)',
      maxWidth: 'none',
      '@screen sm': {
        transform: 'translateX(calc(-50% - -0.5rem))',
        width: '100vw',
        maxWidth: 'none',
        left: '50%',
        position: 'relative',
      },
    },
    '.offcontainer-half-left': {
      width: 'calc(50vw + 0.5rem)',
      float: 'right',
      transform: 'translateX(-1rem)',
      maxWidth: 'none',
      left: 'auto',
      '@screen md': {
        width: 'calc(50vw - 0.5rem)',
        transform: 'translateX(calc(2.25rem / 2))',
      },
    },
    '.offcontainer-half-right': {
      width: 'calc(50vw + 0.5rem)',
      transform: 'translateX(-1rem)',
      left: 'auto',
      '@screen md': {
        width: 'calc(50vw + 0.5rem)',
        transform: 'translateX(calc(-2.25rem / 2))',
      },
    },
    '.offcontainer-left': {
      width: 'calc(100% + 1rem)',
      float: 'right',
      left: 'auto',
      transform: 'none',
      '@screen sm': {
        width: `calc(100% + (50vw - ${theme('screens.sm')} / 2 - -0.5rem))`,
      },
      '@screen md': {
        width: `calc(100% + (50vw - ${theme('screens.md')} / 2 - -1.5rem))`,
      },
      '@screen lg': {
        width: `calc(100% + (50vw - ${theme('screens.lg')} / 2 - -1.5rem))`,
      },
      '@screen xl': {
        width: `calc(100% + (50vw - ${theme('screens.xl')} / 2 - -1.5rem))`,
        maxWidth: 'none',
      },
    },
    '.offcontainer-right': {
      width: 'calc(100% + 1rem)',
      float: 'left',
      left: 'auto',
      transform: 'none',
      '@screen sm': {
        width: `calc(100% + (50vw - ${theme('screens.sm')} / 2 - -0.5rem))`,
      },
      '@screen md': {
        width: `calc(100% + (50vw - ${theme('screens.md')} / 2 - -1.5rem))`,
      },
      '@screen lg': {
        width: `calc(100% + (50vw - ${theme('screens.lg')} / 2 - -1.5rem))`,
      },
      '@screen xl': {
        width: `calc(100% + (50vw - ${theme('screens.xl')} / 2 - -1.5rem))`,
        maxWidth: 'none',
      },
    },
  }

  addUtilities(newUtilities, {
    variants: ['responsive'],
  })
})
