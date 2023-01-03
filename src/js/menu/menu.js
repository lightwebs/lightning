const siteHeader = document.querySelector('.site-header')

// Check if the site header is sticky
const observer = new IntersectionObserver(([e]) => e.target.classList.toggle(`bg-black`, e.intersectionRatio < 1), {
    threshold: [1],
})
observer.observe(siteHeader)

// Closes all active submenus and rotates the arrows
function closeSubMenus() {
    const elems = document.querySelectorAll('#desktop-menu .sub-menu.active')
    if( elems ) {
        elems.forEach((elem) => {
            elem.classList.remove('active')
        })

        const arrows = document.querySelectorAll('#desktop-menu .sub-menu-toggle-button.active')
        if( arrows ) {
            arrows.forEach((arrow) => {
                arrow.classList.remove('active')
            })
        }
    }
}

// Calculates the position of the submenus so they don't go off screen
function calcSubMenuPositions() {
    const subMenuWidth = 740
    const elems = document.querySelectorAll('#desktop-menu .sub-menu')
    if( elems ) {
        elems.forEach((elem) => {

            const parentItem = elem.closest('li')
            const parentItemRect = parentItem.getBoundingClientRect()          
            const parentItemLeft = parentItemRect.left

            if( parentItemLeft + subMenuWidth > window.innerWidth ) {
                elem.style.left = `-${(parentItemLeft + subMenuWidth) - window.innerWidth}px`
            }
        })
    }
}

document.addEventListener('DOMContentLoaded', function() {

    let screenWidth = window.innerWidth
    console.log(screenWidth)
    if( screenWidth >= 1024 ) {
        calcSubMenuPositions()
    }

    // Activate desktop submenu arrows
    subMenuArrows = document.querySelectorAll('#desktop-menu .sub-menu-toggle-button')

    if( subMenuArrows ) {
        for( subMenuArrow of subMenuArrows ) {
        
            subMenuArrow.addEventListener('click', function() {
                const parentItem = this.closest('li')
                const subMenu = parentItem.querySelector('.sub-menu')

                if (subMenu) {
                    subMenu.classList.toggle('active')
                    this.classList.toggle('active')
                }
            })
        }
    }

    // Activate mobile submenu arrows
    subMenuArrows = document.querySelectorAll('#mobile-menu .sub-menu-toggle-button')
    
    if( subMenuArrows ) {
        for( subMenuArrow of subMenuArrows ) {
        
            subMenuArrow.addEventListener('click', function() {

                const parentItem = this.closest('li')
                const subMenu = parentItem.querySelector('.sub-menu')
                

                if (subMenu) {
                    subMenu.classList.toggle('active')
                    this.classList.toggle('active')
                }
            })
        }
    }

    // Close menu on resize to desktop (lg)
    window.addEventListener("resize", function() {
        closeSubMenus()
        calcSubMenuPositions()
    })
    

})