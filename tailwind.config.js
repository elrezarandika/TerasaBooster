/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'terasa': {
                    'bg': '#F8F8E1',
                    'text': '#FFFFFF',
                    'button': '#FF35A6',
                    'card': '#FF8AAE',
                    'pink-dark': '#E91E8C',
                    'pink-light': '#FFB6C1',
                }
            },
            fontFamily: {
                'display': ['Fredoka One', 'cursive'],
                'body': ['Poppins', 'sans-serif'],
            },
            animation: {
                'float': 'float 3s ease-in-out infinite',
                'fall-slow': 'fall 8s linear infinite',
                'fall-medium': 'fall 6s linear infinite',
                'fall-fast': 'fall 4s linear infinite',
                'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'bounce-slow': 'bounce 2s infinite',
                'scroll-hint': 'scrollHint 2s ease-in-out infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                fall: {
                    '0%': { transform: 'translateY(-100vh) rotate(0deg)', opacity: '1' },
                    '100%': { transform: 'translateY(100vh) rotate(720deg)', opacity: '0.3' },
                },
                scrollHint: {
                    '0%, 100%': { transform: 'translateY(0)', opacity: '1' },
                    '50%': { transform: 'translateY(10px)', opacity: '0.5' },
                },
            },
            borderRadius: {
                'blob': '60% 40% 30% 70% / 60% 30% 70% 40%',
            }
        },
    },
    plugins: [],
}
