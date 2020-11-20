const plugin = require('tailwindcss/plugin')

module.exports = plugin(function({ addComponents, theme }) {
    addComponents({
        '.hui-divider': {
            'border-bottom-width': theme('borderWidth.DEFAULT'),
            borderColor: theme('colors.gray.300'),
        },
        '.hui-divider__content': {
            backgroundColor: theme('colors.white'),
            paddingLeft: theme('padding.8'),
            paddingRight: theme('padding.8'),
        }
    })
})