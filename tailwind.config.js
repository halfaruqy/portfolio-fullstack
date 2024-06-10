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
						},
				fontFamily: {
        'rubik': ['Rubik', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}