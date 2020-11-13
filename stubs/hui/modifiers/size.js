const plugin = require('tailwindcss/plugin')

module.exports = plugin(function({ addComponents, theme }) {
    addComponents({
        '.hui--size-xs': {
            paddingTop: theme('padding.1'),
            paddingBottom: theme('padding.1'),
            paddingRight: theme('padding.6'),
            paddingLeft: theme('padding.6'),
            fontSize: theme('fontSize.xs'),
        },
        '.hui--size-sm': {
            paddingTop: theme('padding.1'),
            paddingBottom: theme('padding.1'),
            paddingRight: theme('padding.6'),
            paddingLeft: theme('padding.6'),
            fontSize: theme('fontSize.sm'),
        },
        '.hui--size-base': {
            paddingTop: theme('padding.2'),
            paddingBottom: theme('padding.2'),
            paddingRight: theme('padding.8'),
            paddingLeft: theme('padding.8'),
            fontSize: theme('fontSize.base'),
        },
        '.hui--size-lg': {
            paddingTop: theme('padding.3'),
            paddingBottom: theme('padding.3'),
            paddingRight: theme('padding.10'),
            paddingLeft: theme('padding.10'),
            fontSize: theme('fontSize.lg'),
        },
        '.hui--size-xl': {
            paddingTop: theme('padding.4'),
            paddingBottom: theme('padding.4'),
            paddingRight: theme('padding.12'),
            paddingLeft: theme('padding.12'),
            fontSize: theme('fontSize.xl'),
        },
    })
})