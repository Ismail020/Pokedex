module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
      screens: {
        'sm': '500px',
        // => @media (min-width: 640px) { ... }

        'sm2': '500px',

        'sm3': '700px',
  
        'md': '768px',
        // => @media (min-width: 768px) { ... }

        'md2': '915px',
  
        'lg': '10240px',
        // => @media (min-width: 1024px) { ... }

        'lg2': '1150px',

        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }
  
        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
      }
    },
    plugins: [],
}
