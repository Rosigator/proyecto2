module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'films': "linear-gradient(rgba(0,0,0,.9) 0%, rgba(0,0,0,.7) 25%, rgba(0,0,0,.2), rgba(0,0,0,0.7) 75%, rgba(0,0,0,.9) 100%), url('/public/Netflix/img/background_films.jpg')",
      },
      width: {
        '90%': '90%'
      },
      screens: {
        'xs': '480px',
        'lgc': '1050px'
      },
      boxShadow: {
        'menu': '0 3px 3px 2px rgba(0,0,0,0.5)'
      }
    },
  },
  plugins: [],
}
