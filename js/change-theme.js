document.addEventListener('DOMContentLoaded', function() {
    // Función para obtener parámetros de la URL
    function getQueryParam(param) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(param);
    }

    // Aplicar el tema basado en el parámetro 'theme'
    const theme = getQueryParam('theme');
    if (theme === 'dark') {
        document.querySelectorAll('.container h4').forEach(function(h4) {
            h4.style.color = '#eee';
          });
    } else {
      document.body.classList.add('light-theme');
    }
  });