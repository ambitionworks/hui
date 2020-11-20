const plugin = require('tailwindcss/plugin')

module.exports = plugin(function({ addComponents, theme }) {
    addComponents({
        '.hui-badge': {
            borderRadius: theme('borderRadius.full'),
            borderWidth: theme('borderWidth.DEFAULT'),
            borderColor: theme('colors.gray.300'),
            backgroundColor: theme('colors.white'),
            fontSize: theme('fontSize.sm'),
            paddingLeft: theme('padding.2'),
            paddingRight: theme('padding.2'),
        },
    })
})