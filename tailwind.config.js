import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
    daisyui: {
        themes: [
          {
            mytheme: {
                "primary": "#023047",       // Deep blue for headers and prominent elements
                "secondary": "#8ecae6",     // A soft and calming light blue for backgrounds
                "accent": "#fb8500",        // Vibrant coral or orange for buttons and important elements
                "neutral": "#f0f0f0",       // Light gray for a neutral background
                "base-100": "#ffffff",      // White for a pure base color
                "info": "#219ebc",          // Another shade of blue for informational elements
                "success": "#ffb703",       // Subtle yellow for success or positive elements
                "warning": "#ff6f61",       // Coral or orange for warning or alert elements
                "error": "#023047",         // Deep blue for error or critical elements
              },
          },
        ],
      },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["light","cupcake"],
      },
};
// module.exports = {
    //...
    
//   }
