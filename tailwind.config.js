/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
							primary: {
								50: '#f1f8fe',
								100: '#e2f0fc',
								200: '#bddffa',
								300: '#83c6f6',
								400: '#42a9ee',
								500: '#198fde',
								600: '#0c71bd',
								700: '#0b5a99',
								800: '#0d4c7f',
								900: '#114169',
								950: '#0d2f50',
							},
              secondary: {
								50: '#fef2f2',
								100: '#ffe1e1',
								200: '#ffc9c8',
								300: '#ffa3a2',
								400: '#fc6361',
								500: '#f4413f',
								600: '#e22320',
								700: '#be1917',
								800: '#9d1917',
								900: '#821b1a',
								950: '#470908',
							},
			},
			fontFamily: {
        'rubik': ['Rubik', ...defaultTheme.fontFamily.sans],
      },
      backgroundImage: {
        'hero-map': "url('https://alfaruqy.me/images/hero-map-2.svg')"
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}