const plugin = require('tailwindcss/plugin');

module.exports = {
  plugins: [
    plugin(function({ addUtilities, theme, e }) {
      const newUtilities = {};
      Object.entries(theme('colors')).forEach(([name, value]) => {
        if (typeof value === 'object') {
          Object.entries(value).forEach(([key, val]) => {
            const className = `.text-gradient-${e(name)}-${e(key)}`;
            newUtilities[className] = {
              background: `linear-gradient(to right, ${val})`,
              '-webkit-background-clip': 'text',
              'text-fill-color': 'transparent'
            };
          });
        } else {
          const className = `.text-gradient-${e(name)}`;
          newUtilities[className] = {
            background: `linear-gradient(to right, ${value})`,
            '-webkit-background-clip': 'text',
            'text-fill-color': 'transparent'
          };
        }
      });
      addUtilities(newUtilities, ['responsive', 'hover']);
    })
  ],
};
