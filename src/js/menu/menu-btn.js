

document.addEventListener('DOMContentLoaded', function() {

    const menuBtn = document.getElementById('main-menu-toggle')
    const mobileMenu = document.getElementById('main-menu')
    const burgerIcon = document.getElementById('burger-icon')
    
    function toggleMenu() {
        mobileMenu.classList.toggle('!flex')
        burgerIcon.textContent === 'menu' ? burgerIcon.textContent = 'close' : burgerIcon.textContent = 'menu'
        document.body.classList.toggle('mobile-menu-open')
    }

    menuBtn.addEventListener('click', function() {
        toggleMenu()
    })
    
    // Close menu on resize to desktop (lg)
    window.addEventListener("resize", function() {
        if( document.body.classList.contains('mobile-menu-open') && window.innerWidth > 1024 ) {
            toggleMenu()
        }
    })

})