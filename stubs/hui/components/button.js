const plugin = require('tailwindcss/plugin')

module.exports = plugin(function({ addComponents, theme }) {
    addComponents({
        '.hui-button': {
            borderRadius: theme('borderRadius.DEFAULT'),
            borderWidth: theme('borderWidth.DEFAULT'),
            borderColor: theme('colors.gray.300'),
            backgroundColor: theme('colors.white'),
            transitionProperty: theme('transitionProperty.all'),
            transitionDuration: theme('transitionDuration.200'),
            transitionTimingFunction: theme('transitionTimingFunction.ease-in-out'),
            '&:hover': {
                borderColor: theme('colors.gray.800'),
            },
            '&[disabled]': {
                backgroundColor: theme('colors.gray.100'),
                borderColor: theme('colors.gray.300'),
                color: theme('colors.gray.400'),
            },
            '&[disabled]:hover': {
                cursor: theme('cursor.not-allowed'),
            }
        },
    })
})