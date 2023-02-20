/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './src/js/**/*.js',
        './inc/acf/lightning-builder/page-components/**/*.php',
        './inc/acf/article-builder/article-components/**/*.php',
        './**/*.php',
    ],
    // darkMode: 'class',
    corePlugins: {
        container: false,
    },
    safelist: [
        {
            pattern: /grid-cols-(1|2|3|4|5|6|7|8)/,
            variants: ['md', 'lg', 'xl', 'xxl'],
        },
    ],

    theme: {
        maxWidth: {
            '1/2': '50%',
        },
        screens: {
            xs: '374px',
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
            xxl: '1536px',
        },

        fontFamily: {
            sans: ['Inter', 'sans-serif'],
            material: ['"Material Icons Round"', 'sans-serif'],
        },

        colors: {
            transparent: 'transparent',
            white: '#ffffff',
            black: '#000000',
            gray: {
                50: '#f9fafb',
                100: '#f3f4f6',
                200: '#e5e7eb',
                300: '#d1d5db',
                400: '#9ca3af',
                500: '#6b7280',
                600: '#4b5563',
                700: '#374151',
                800: '#1f2937',
                900: '#111827',
            },
            purple: {
                50: '#F7F1FE',
                100: '#DAC2FA',
                200: '#BE93F6',
                300: '#A264F1',
                400: '#8535ED',
                500: '#6B13DC',
                600: '#540FAE',
                700: '#3D0B7F',
                800: '#270750',
                900: '#100321',
            },
            background: {
                transparent: 'transparent',
                white: '#ffffff',
                black: '#000C24',
            },
            text: {
                black: '#000000',
                white: '#ffffff',
            },
        },

        extend: {
            aspectRatio: {
                '4/3': '4 / 3',
                '3/4': '3 / 4',
            },
            maxWidth: {
                container: '1800px',
                ['container-1/2']: '900px',
            },

            fontSize: {
                inherit: 'inherit',
                '2.5xl': '1.75rem',
            },

            padding: {
                18: '4.5rem',
            },
        },

        variants: {
            extend: {
                lineClamp: ['active'],
            },
        },
    },
    plugins: [require('@tailwindcss/line-clamp'), require('@tailwindcss/aspect-ratio')],
}
