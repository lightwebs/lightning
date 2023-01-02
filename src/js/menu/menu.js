const siteHeader = document.querySelector('.site-header')

// Check if scroll position is greater than 0
function checkScrollPosition() {
    console.log(window.scrollY)
    if (window.scrollY > 20) {
        siteHeader.classList.add('bg-black')
    } else {
        siteHeader.classList.remove('bg-black')
    }
}

document.addEventListener('DOMContentLoaded', checkScrollPosition)
window.addEventListener('scroll', checkScrollPosition)

document.addEventListener('click', function (e) {
    const overlay = document.querySelector('.overlay')
    const mainMenu = document.querySelector('#main-menu')

    if (e.target.classList.contains('main-menu-toggle-btn')) {
        document.body.classList.toggle('main-menu-open')
        mainMenu.classList.toggle('!flex')
    }

    // Toggle nav items that has the nav-toggle class, closes on click outside
    const navToggles = document.querySelectorAll('.nav-toggle')
    navToggles.forEach((navToggle) => {
        if (e.target === navToggle && e.target.classList.contains('active')) {
            navToggle.classList.remove('active', 'show')
            return
        }

        if (
            (e.target !== navToggle && !navToggle.contains(e.target)) ||
            e.target.matches('.nav-toggle.active .menu-item-link')
        ) {
            navToggle.classList.remove('active', 'show')
        } else {
            navToggle.classList.add('active')

            setTimeout(() => {
                navToggle.classList.add('show')
            }, 100)
        }
    })

    if (e.target.classList.contains('sub-menu-toggle-button')) {
        const parentItem = e.target.closest('.menu-item')
        const subMenu = parentItem.querySelector('.sub-menu')

        if (subMenu && subMenu.classList.contains('sub-menu')) {
            subMenu.classList.toggle('active')
        }
    }
})
