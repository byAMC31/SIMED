document.addEventListener('DOMContentLoaded', () => {
    const darkModeToggle = document.querySelector('#darkModeToggle');
    const body = document.querySelector('body');
    const darkModeIcon = document.getElementById('darkModeIcon');
    const darkModeText = document.getElementById('darkModeText');

    // Aplica el modo oscuro si la última preferencia del usuario fue el modo oscuro
    if (localStorage.getItem('darkMode') === 'true') {
        body.classList.add('dark-mode');
        darkModeIcon.classList.remove('fas', 'fa-moon');
        darkModeIcon.classList.add('fas', 'fa-sun');
        darkModeText.innerText = 'Modo Claro';
        darkModeToggle.checked = true;
    }

    darkModeToggle.addEventListener('change', (event) => {
        body.classList.toggle('dark-mode');

        // Cambiar el ícono y el texto según el modo
        if (body.classList.contains('dark-mode')) {
            darkModeIcon.classList.remove('fas', 'fa-moon');
            darkModeIcon.classList.add('fas', 'fa-sun');
            darkModeText.innerText = 'Modo Claro';
        } else {
            darkModeIcon.classList.remove('fas', 'fa-sun');
            darkModeIcon.classList.add('fas', 'fa-moon');
            darkModeText.innerText = 'Modo oscuro';
        }

        // Guarda la preferencia del usuario en el almacenamiento local
        localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
    });
});