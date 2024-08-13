document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');
    const header = document.querySelector('header');

    hamburger.addEventListener('click', function () {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active'); // Alternar la clase active en la hamburguesa

        if (navLinks.classList.contains('active')) {
            header.style.height = 'auto'; // Deja que el header crezca automáticamente
        } else {
            header.style.height = ''; // Restablece la altura original
        }
    });
});
