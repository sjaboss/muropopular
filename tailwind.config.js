const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/**.vue',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      /* fontFamily: {
          sans: ['Nunito', ...defaultTheme.fontFamily.sans],
        }, */
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      emerald: colors.emerald,
      indigo: colors.indigo,
      yellow: colors.yellow,
      blue: colors.blue,
      dark: colors.dark,
      // Agregamos más colores
      red: colors.red,
      orange: colors.orange,
      green: colors.green,
      teal: colors.teal,
      cyan: colors.cyan,
      pink: colors.pink,
      purple: colors.purple,
      brown: colors.brown,
      tan: colors.tan,
      silver: colors.silver,
      gold: colors.gold,
      copper: colors.copper,
      bronze: colors.bronze,
    },
  },

  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('tailwindcss-animated')],
};
