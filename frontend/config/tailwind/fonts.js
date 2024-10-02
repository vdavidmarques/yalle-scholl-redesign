const plugin = require('tailwindcss/plugin')

module.exports = plugin(function ({ addComponents, theme }) {
  addComponents({
    // HEADINGS
    '.heading-7xl': {
      fontSize: '2rem',
      lineHeight: '125%',
      fontFamily: theme('fontFamily.travels-demibold'),
      fontWeight: '600',
      letterSpacing: '-0.03em',
      '@screen lg': {
        fontSize: '4.25rem',
      },
    },
    '.heading-6xl': {
      fontSize: '1.875rem',
      lineHeight: '120%',
      fontFamily: theme('fontFamily.travels-demibold'),
      fontWeight: '600',
      '@screen lg': {
        fontSize: '4.25rem',
      },
    },
    '.heading-5xl-demibold': {
      fontSize: '1.5rem',
      lineHeight: '125%',
      fontFamily: theme('fontFamily.travels-demibold'),
      '@screen lg': {
        fontSize: '3rem',
      },
    },
    '.heading-5xl-light': {
      fontSize: '1.5rem',
      lineHeight: '125%',
      fontFamily: theme('fontFamily.travels-light'),
      '@screen lg': {
        fontSize: '3rem',
      },
    },
    '.heading-4xl': {
      fontSize: '1.375rem',
      lineHeight: '120%',
      fontFamily: theme('fontFamily.travels-bold'),
      fontWeight: '600',
      '@screen lg': {
        fontSize: '2.25rem',
      },
    },
    '.heading-3xl': {
      fontSize: '1.3125rem',
      lineHeight: '120%',
      fontFamily: theme('fontFamily.travels-demibold'),
      fontWeight: '600',
      '@screen lg': {
        fontSize: '1.75rem',
      },
    },
    '.heading-xl': {
      fontSize: '1.125rem',
      lineHeight: '150%',
      fontFamily: theme('fontFamily.travels-demibold'),
      fontWeight: '600',
      '@screen lg': {
        fontSize: '1.25rem',
      },
    },
    '.heading-lg': {
      fontSize: '1.0625rem',
      lineHeight: '150%',
      fontFamily: theme('fontFamily.travels-demibold'),
      fontWeight: '600',
      '@screen lg': {
        fontSize: '1.125rem',
      },
    },
    '.heading-sm': {
      fontSize: '0.875rem',
      lineHeight: '150%',
      fontFamily: theme('fontFamily.travels-bold'),
      fontWeight: '600',
    },
    '.heading-xs': {
      fontSize: '0.75rem',
      lineHeight: '150%',
      fontFamily: theme('fontFamily.travels-bold'),
      fontWeight: '700',
    },
  })
})
