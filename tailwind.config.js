module.exports = {
  content: [
    './resources/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
  ],
  theme: {
    extend: []
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}