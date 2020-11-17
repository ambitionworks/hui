const plugin = require('tailwindcss/plugin')

module.exports = plugin(function({ addComponents, theme }) {
    addComponents({
        '.hui--palette-primary': {
            backgroundColor: theme('colors.blue.600'),
            borderColor: theme('colors.transparent'),
            color: theme('colors.white'),
            '&.hui-button:hover': {
                backgroundColor: theme('colors.white'),
                borderColor: theme('colors.blue.600'),
                color: theme('colors.blue.600'),
            },
        },
        '.hui--palette-secondary': {
            backgroundColor: theme('colors.black'),
            borderColor: theme('colors.transparent'),
            color: theme('colors.white'),
            '&.hui-button:hover': {
                backgroundColor: theme('colors.white'),
                borderColor: theme('colors.black'),
                color: theme('colors.black'),
            },
        },
        '.hui--palette-warning': {
            backgroundColor: theme('colors.yellow.400'),
            borderColor: theme('colors.transparent'),
            color: theme('colors.white'),
            '&.hui-button:hover': {
                backgroundColor: theme('colors.white'),
                borderColor: theme('colors.yellow.400'),
                color: theme('colors.yellow.400'),
            },
        },
        '.hui--palette-danger': {
            backgroundColor: theme('colors.red.600'),
            borderColor: theme('colors.transparent'),
            color: theme('colors.white'),
            '&.hui-button:hover': {
                backgroundColor: theme('colors.white'),
                borderColor: theme('colors.red.600'),
                color: theme('colors.red.600'),
            },
        },
    })
})