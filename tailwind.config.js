const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  purge: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        serif: ["Montserrat", ...defaultTheme.fontFamily.serif]
      }
    }
  },
  variants: {
    extend: {
      borderWidth: ["hover", "focus"],
      textColor: ["disabled"],
      backgroundColor: ["disabled"],
      cursor: ["hover"]
    }
  },
  plugins: [require("@tailwindcss/forms")]
};
