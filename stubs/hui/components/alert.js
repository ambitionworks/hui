const plugin = require('tailwindcss/plugin')

module.exports = plugin(function({ addComponents, theme }) {
    addComponents({
        '.hui-alert': {
            'border-left-width': theme('borderWidth.4'),
            padding: theme('padding.4'),
            '&.hui--palette-primary': {
                backgroundColor: theme('colors.blue.100'),
                borderColor: theme('colors.blue.600'),
                color: theme('colors.blue.600'),
            },
            '&.hui--palette-secondary': {
                backgroundColor: theme('colors.gray.100'),
                borderColor: theme('colors.black'),
                color: theme('colors.black'),
            },
            '&.hui--palette-warning': {
                backgroundColor: theme('colors.yellow.100'),
                borderColor: theme('colors.yellow.600'),
                color: theme('colors.yellow.600'),
            },
            '&.hui--palette-danger': {
                backgroundColor: theme('colors.red.100'),
                borderColor: theme('colors.red.600'),
                color: theme('colors.red.600'),
            },
        }
    })
})