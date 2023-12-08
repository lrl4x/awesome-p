module.exports = {
 
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('https://gtspirit.com/wp-content/uploads/2021/03/2022-BMW-M3-Isle-of-Man-Green-43.jpg')",
        'footer-texture': "url('LOGO.png')",
      },
      listStyleImage: {
        logo: 'url("/img/LOGO1.png")',
      },
    }
  },
  plugins: [
      require('flowbite/plugin')
  ],
}