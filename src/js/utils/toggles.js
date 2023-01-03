document.addEventListener('click', (e) => {
    if (e.target.classList.contains('ac-header')) {
        const accordionBody = e.target.nextElementSibling
        const accordionHeader = e.target
        accordionHeader.classList.toggle('active')
        accordionBody.classList.toggle('!block')
    }
    if (e.target.classList.contains('ac-footer')) {
        const accordionBody = e.target.previousElementSibling
        const accordionHeader = e.target
        accordionHeader.classList.toggle('active')
        accordionBody.classList.toggle('!block')
    }

    if (e.target.classList.contains('ac-open-top')) {
        const accordionBody = e.target.nextElementSibling
        const accordionHeader = e.target
        accordionHeader.classList.toggle('active')

        if (!accordionBody.classList.contains('!flex')) {
            accordionBody.classList.add(
                '!flex',
                'gap-3',
                'bottom-full',
                'p-1',
                'bg-white/90',
                'dark:bg-blue-1000/80',
                'rounded',
                '-ml-2'
            )
        } else {
            accordionBody.classList.remove(
                '!flex',
                'gap-3',
                'bottom-full',
                'p-1',
                'bg-white/90',
                'dark:bg-blue-1000/80',
                'rounded',
                '-ml-2'
            )
        }
    }

    if (e.target.classList.contains('overlay')) {
        const overlay = e.target
        overlay.classList.remove('visible')
    }
    if (e.target.classList.contains('card-body')) {
        const cardBody = e.target
        cardBody.classList.toggle('!line-clamp-none')
    }
})
