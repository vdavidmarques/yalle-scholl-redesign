/** @type {import('tailwindcss').Config} */

module.exports = {
  mode: 'jit',
  content: [
    './pages/**/*.{js,jsx}',
    './layouts/**/*.{js,jsx}',
    './components/**/*.{js,jsx}',
    './helpers/**/*.{js,jsx}',
  ],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      white: '#fff',
      black: '#000',
      gray: {
        dark: '#727272',
      },
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '1.5xl': '1440px',
      '2xl': '1536px',
    },
    extend: {
      fontFamily: {
        'travels-bold': ['TravelsBold'],
        roboto: '"Roboto", sans-serif',
      },
      minWidth: (theme) => ({
        ...theme('spacing'),
      }),
      maxWidth: (theme) => ({
        ...theme('spacing'),
      }),
      minHeight: (theme) => ({
        ...theme('spacing'),
      }),
      maxHeight: (theme) => ({
        ...theme('spacing'),
      }),
    },
  },
  safelist: [
    {
      pattern: /^bg-/,
      variants: ['md', 'lg', 'xl'],
    },
    {
      pattern: /^text-/,
    },
    {
      pattern: /^from-/,
    },
    {
      pattern: /^col-start-/,
    },
    {
      pattern: /^row-start-/,
    },
  ],
  plugins: [
    require('@tailwindcss/typography'),
    require('./config/tailwind/container.js'),
    require('./config/tailwind/fonts.js'),
    require('./config/tailwind/offcontainer.js'),
  ],
}
