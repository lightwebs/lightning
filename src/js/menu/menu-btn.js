function toggleMenu() {
    const mainMenu = document.querySelector('#main-menu')
    const menuToggleIcon = document.querySelector('.menu-toggle-icon')
    mainMenu.classList.toggle('!flex')
    document.body.classList.toggle('mobile-menu-open')

    menuToggleIcon.textContent === 'menu'
        ? (menuToggleIcon.textContent = 'close')
        : (menuToggleIcon.textContent = 'menu')
}

document.addEventListener('click', function (e) {
    if (e.target.closest('.main-menu-toggle-btn')) {
        toggleMenu()
    }
})
