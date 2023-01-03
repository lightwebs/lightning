

document.addEventListener('DOMContentLoaded', function() {

    const hamburger = document.getElementById('main-menu-toggle')
    const mobileMenu = document.getElementById('mobile-menu')
    const burgerIcon = document.getElementById('burger-icon')
    const burgerClose = document.getElementById('burger-close')
    
    function toggleMenu() {
        mobileMenu.classList.toggle('!flex')
        burgerIcon.classList.toggle('hidden')
        burgerClose.classList.toggle('hidden')
        document.body.classList.toggle('mobile-menu-open')
    }

    hamburger.addEventListener('click', function() {
        toggleMenu()
    })
    
    // Close menu on resize to desktop (lg)
    window.addEventListener("resize", function() {
        if( document.body.classList.contains('mobile-menu-open') && window.innerWidth > 1024 ) {
            toggleMenu()
        }
    })

})