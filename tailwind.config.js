/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './**/*.ts',
        './src/js/**/*.js',
        './inc/acf/lightning-builder/page-components/**/*.php',
        './inc/acf/article-builder/article-components/**/*.php',
        './**/*.php',
    ],
    // darkMode: 'class',
    safelist: [
        {
            pattern: /grid-cols-(1|2|3|4)/,
            variants: ['md', 'lg', 'xl', 'xxl'],
        },
    ],

    theme: {
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
            space: ['"Space Grotesk"', 'sans-serif'],
            material: ['"Material Icons Round"', 'sans-serif'],
        },
        container: {
            screens: {
                // sm: '560px',
                // md: '754px',
                // lg: '978px',
                // xl: '1186px',
                xxl: '1400px',
            },
            padding: '1rem',
            center: true,
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
                black: '#000000',
            },
            text: {
                white: '#ffffff',
                black: '#000000',
            },
        },

        extend: {
            aspectRatio: {
                '4/3': '4 / 3',
                '3/4': '3 / 4',
            },
            fontSize: {
                inherit: 'inherit',
            },
        },

        plugins: [require('@tailwindcss/line-clamp'), require('@tailwindcss/aspect-ratio')],
    },
}
