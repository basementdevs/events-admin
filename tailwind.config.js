/** @type {import('tailwindcss').Config} */
export default {
  darkMode: ["media"],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
      extend: {
        container: {
          center: true,
          padding: '1rem',
          screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1122px',
          },
        },
        colors: {
          primary: {
            DEFAULT: "rgb(var(--color-primary-500) / <alpha-value>)",
            50: "rgb(var(--color-primary-50) / <alpha-value>)",
            100: "rgb(var(--color-primary-100) / <alpha-value>)",
            200: "rgb(var(--color-primary-200) / <alpha-value>)",
            300: "rgb(var(--color-primary-300) / <alpha-value>)",
            400: "rgb(var(--color-primary-400) / <alpha-value>)",
            500: "rgb(var(--color-primary-500) / <alpha-value>)",
            600: "rgb(var(--color-primary-600) / <alpha-value>)",
            700: "rgb(var(--color-primary-700) / <alpha-value>)",
            800: "rgb(var(--color-primary-800) / <alpha-value>)",
            900: "rgb(var(--color-primary-900) / <alpha-value>)",
          },
          secondary: {
            DEFAULT: "rgb(var(--color-secondary-500) / <alpha-value>)",
            50: "rgb(var(--color-secondary-50) / <alpha-value>)",
            100: "rgb(var(--color-secondary-100) / <alpha-value>)",
            200: "rgb(var(--color-secondary-200) / <alpha-value>)",
            300: "rgb(var(--color-secondary-300) / <alpha-value>)",
            400: "rgb(var(--color-secondary-400) / <alpha-value>)",
            500: "rgb(var(--color-secondary-500) / <alpha-value>)",
            600: "rgb(var(--color-secondary-600) / <alpha-value>)",
            700: "rgb(var(--color-secondary-700) / <alpha-value>)",
            800: "rgb(var(--color-secondary-800) / <alpha-value>)",
            900: "rgb(var(--color-secondary-900) / <alpha-value>)",
          },
          helper: {
            green: "rgb(var(--color-helper-green) / <alpha-value>)",
            yellow: "rgb(var(--color-helper-yellow) / <alpha-value>)",
            red: "rgb(var(--color-helper-red) / <alpha-value>)",
            blue: "rgb(var(--color-helper-blue) / <alpha-value>)",
            icon: "rgb(var(--color-helper-icon) / <alpha-value>)",
            outline: "rgb(var(--color-helper-outline) / <alpha-value>)",
          },
          text: {
            high: "rgb(var(--color-text-high) / <alpha-value>)",
            medium: "rgb(var(--color-text-medium) / <alpha-value>)",
            low: "rgb(var(--color-text-low) / <alpha-value>)",
          },
          icon: {
            high: "rgb(var(--color-icon-high) / <alpha-value>)",
            medium: "rgb(var(--color-icon-medium) / <alpha-value>)",
            low: "rgb(var(--color-icon-low) / <alpha-value>)",
          },
          elevation: {
            surface: "rgb(var(--color-elevation-surface) / <alpha-value>)",
            "01dp": "rgb(var(--color-elevation-01dp) / <alpha-value>)",
            "02dp": "rgb(var(--color-elevation-02dp) / <alpha-value>)",
            "03dp": "rgb(var(--color-elevation-03dp) / <alpha-value>)",
            "04dp": "rgb(var(--color-elevation-04dp) / <alpha-value>)",
            "05dp": "rgb(var(--color-elevation-05dp) / <alpha-value>)",
          },
        },
        opacity: {
          semiopaque: "var(--opacity-semiopaque)",
          intense: "var(--opacity-intense)",
          medium: "var(--opacity-medium)",
          light: "var(--opacity-light)",
          semitransparent: "var(--opacity-semitransparent)",
        },
        borderRadius: {
          none: "var(--border-radius-none)",
          xs: "var(--border-radius-xs)",
          sm: "var(--border-radius-sm)",
          md: "var(--border-radius-md)",
          lg: "var(--border-radius-lg)",
          pill: "var(--border-radius-pill)",
        },
        borderWidth: {
          none: "var(--border-width-none)",
          hairline: "var(--border-width-hairline)",
          thin: "var(--border-width-thin)",
          thick: "var(--border-width-thick)",
          heavy: "var(--border-width-heavy)",
        },
        boxShadow: {
          level: {
            1: "var(--drop-shadow-level-1)",
            2: "var(--drop-shadow-level-2)",
            3: "var(--drop-shadow-level-3)",
            4: "var(--drop-shadow-level-4)",
          },
        },
        spacing: {
          nano: "var(--spacing-nano)",
          xxxxs: "var(--spacing-xxxxs)",
          xxxs: "var(--spacing-xxxs)",
          xxs: "var(--spacing-xxs)",
          xs: "var(--spacing-xs)",
          sm: "var(--spacing-sm)",
          md: "var(--spacing-md)",
          lg: "var(--spacing-lg)",
          xl: "var(--spacing-xl)",
          xxl: "var(--spacing-xxl)",
          xxxl: "var(--spacing-xxxl)",
          xxxx: "var(--spacing-xxxxl)",
          huge: "var(--spacing-huge)",
          giant: "var(--spacing-giant)",
          extraGiant: "var(--spacing-extra-giant)",
        },
        fontFamily: {
          primary: "var(--font-family-primary)",
          secondary: "var(--font-family-secondary)",
          button: ["Sora", "sans-serif"],
        },
        fontSize: {
          xxxs: "var(--font-size-xxxs)",
          xxs: "var(--font-size-xxs)",
          xs: "var(--font-size-xs)",
          sm: "var(--font-size-sm)",
          md: "var(--font-size-md)",
          lg: "var(--font-size-lg)",
          xl: "var(--font-size-xl)",
          xxl: "var(--font-size-xxl)",
          xxxl: "var(--font-size-xxxl)",
          xxxx: "var(--font-size-xxxxl)",
          display: "var(--font-size-display)",
          giant: "var(--font-size-giant)",
        },
        lineHeight: {
          default: "var(--line-height-default)",
          xs: "var(--line-height-xs)",
        },
      },
    },
    plugins: [],
  };