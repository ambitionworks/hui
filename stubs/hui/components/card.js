const plugin = require('tailwindcss/plugin')

module.exports = plugin(function({ addComponents, theme }) {
    addComponents({
        '.hui-card': {
            borderRadius: theme('borderRadius.lg'),
            borderWidth: theme('borderWidth.default'),
            borderColor: theme('colors.gray.300'),
            backgroundColor: theme('colors.white'),
            fontSize: theme('fontSize.sm'),
        },
    })
})