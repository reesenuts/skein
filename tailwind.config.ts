import typography from '@tailwindcss/typography';
import type { Config } from 'tailwindcss';

export default {
  content: ['./src/**/*.{html,js,svelte,ts}'],

  theme: {
    extend: {
      fontFamily: {
        dmSans: ["DM Sans", "sans-serif"], // for body text
        inter: ["Inter", "serif"], // for headings
        sonsieOne: ["Sonsie One", "serif"] // for hero text
      },
      colors: {
        // color scheme
        light: "#DBD8E3", 
        lightPurple: "#5C5470",
        purple: "#352F44",
        darkPurple: "#2A2438",

        // extra
        muted: "#686868",
        backdrop: "#E2E2E2",

        // main color palette for shop
        one: "#A7AEC1",
        two: "#C5C8D2",
        three: "#F5F5F5",
        four: "#FBFBFD",

      }
    }
  },

  plugins: [typography]
} satisfies Config;
