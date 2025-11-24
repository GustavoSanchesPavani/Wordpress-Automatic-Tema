document.addEventListener('DOMContentLoaded', () => {
    const marcaSticky = document.getElementById('marca-sticky');
    const btnMobile = document.getElementById('btn-mobile');
    const menuMobile = document.getElementById('menu-mobile');
    const iconeMenu = btnMobile.querySelector('i');

    // Lógica Scroll (Desktop)
    function verificarScroll() {
        // Se mobile (< 1024px), o CSS já cuida de deixar visível.
        // Se desktop, verificamos o scroll.
        if (window.innerWidth >= 1024) {
            if (window.scrollY > 150) {
                marcaSticky.classList.add('visivel');
            } else {
                marcaSticky.classList.remove('visivel');
            }
        }
    }
    window.addEventListener('scroll', verificarScroll);
    window.addEventListener('resize', verificarScroll);
    verificarScroll(); // Checagem inicial

    // Lógica Menu Mobile
    btnMobile.addEventListener('click', () => {
        menuMobile.classList.toggle('oculto');
        if(menuMobile.classList.contains('oculto')) {
            iconeMenu.className = 'fas fa-bars';
        } else {
            iconeMenu.className = 'fas fa-times';
        }
    });

    // Fechar menu ao clicar
    menuMobile.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menuMobile.classList.add('oculto');
            iconeMenu.className = 'fas fa-bars';
        });
    });
});