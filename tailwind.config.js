import withMT from "@material-tailwind/html/utils/withMT";
/** @type {import('tailwindcss').Config} */
export default withMT ( {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
      extend: {
        colors: {
            'text-primary' : '#02A04B',
            'bg-primary' : "#E6FBF0",
            'bg-secondary' : "#4E944F",
            'border-primary' : "#02A04B",
        },
        
      },
  },
  plugins: [],
});