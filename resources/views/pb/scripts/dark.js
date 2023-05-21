document.addEventListener('DOMContentLoaded', () => {
    const darkModeToggle = document.querySelector('.nav-link[data-widget="control-sidebar"]');
    const body = document.querySelector('body');

    // Aplica el modo oscuro si la última preferencia del usuario fue el modo oscuro
    if (localStorage.getItem('darkMode') === 'true') {
        body.classList.add('dark-mode');
    }

    darkModeToggle.addEventListener('click', (event) => {
        event.preventDefault();
        body.classList.toggle('dark-mode');
        
        // Guarda la preferencia del usuario en el almacenamiento local
        localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
    });
});