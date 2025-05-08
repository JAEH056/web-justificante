document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuList = document.querySelector('.menu-list');

    menuToggle.addEventListener('click', () => {
        menuList.classList.toggle('active');
    });

    // Opcional: para cerrar submenús al hacer clic fuera
    document.addEventListener('click', (e) => {
        if (!menuList.contains(e.target) && !menuToggle.contains(e.target)) {
            menuList.classList.remove('active');
        }
    });
});