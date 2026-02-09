(function () {
  const palettes = {
    red: {
      '--poppyrose-primary-100': '#fe7fb6',
      '--poppyrose-primary-300': '#ff005b',
      '--poppyrose-primary-700': '#bf0413',
      '--poppyrose-primary-900': '#8c0335',
    },
    blue: {
      '--poppyrose-primary-100': '#00a5c6',
      '--poppyrose-primary-300': '#0075a8',
      '--poppyrose-primary-700': '#f995bc',
      '--poppyrose-primary-900': '#b54d62',
    },
    gold: {
      '--poppyrose-primary-100': '#733702',
      '--poppyrose-primary-300': '#f29f05',
      '--poppyrose-primary-700': '#d3c40e',
      '--poppyrose-primary-900': '#cd071e',
    },
  };

  function applyPalette(name) {
    const palette = palettes[name];
    if (!palette) return;
    const root = document.documentElement;
    Object.entries(palette).forEach(([key, value]) => {
      root.style.setProperty(key, value);
    });

    const logo = document.querySelector('.poppyrose-logo-img');
    if (logo) {
      const logoSrc = logo.dataset[`logo${name.charAt(0).toUpperCase()}${name.slice(1)}`];
      if (logoSrc) {
        logo.src = logoSrc;
      }
    }

    localStorage.setItem('poppyrose-palette', name);
  }

  document.addEventListener('DOMContentLoaded', () => {
    const saved = localStorage.getItem('poppyrose-palette');
    if (saved) {
      applyPalette(saved);
    }

    document.querySelectorAll('.poppyrose-swatch').forEach((button) => {
      button.addEventListener('click', () => {
        applyPalette(button.dataset.palette);
      });
    });
  });
})();
