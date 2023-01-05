

function positionTimeline( timeline, index = null ) {
    // If index is null, get the index of the selected element
    if( index === null ) {
        const selectedElement = timeline.querySelector('.year-active')
        index = [].indexOf.call(selectedElement.parentElement.children, selectedElement)
    }

    // Relevant elements for calculating position
    const selector = timeline.querySelector('.timeline-selector')
    const selectorChildren = selector.querySelectorAll('div')
    const timelineItems = timeline.querySelectorAll('.timeline-item')

    // Calculate position
    const selectorWidth = selector.offsetWidth
    const selectorItemWidth = selectorChildren[0].offsetWidth
    const screenWidth = window.innerWidth
    const gapWidth = (selectorWidth - (selectorItemWidth * selectorChildren.length)) / (selectorChildren.length - 1)
    const distancePerIndex = selectorItemWidth + gapWidth
    const positon = ((screenWidth / 2) - (selectorItemWidth / 2)) - (distancePerIndex * index)

    // Move timeline selector
    selector.style.transform = 'translateX(' + positon + 'px)'

    // Set active classes on button
    selectorChildren.forEach( (selectorChild) => {
        selectorChild.classList.remove('year-active', 'font-bold', 'opacity-100')
        selectorChild.classList.add('font-light', 'opacity-50')
    })
    selectorChildren[index].classList.remove('font-light', 'opacity-50')
    selectorChildren[index].classList.add('year-active', 'font-bold', 'opacity-100')

    // Toggle acctual content
    timelineItems.forEach( (timelineItem) => {
        timelineItem.classList.remove('!flex')
    })
    timelineItems[index].classList.add('!flex')
}

document.addEventListener('DOMContentLoaded', function() {

    const timelines = document.getElementsByClassName('pc-timeline')

    if( timelines ) {
        for( const timeline of timelines ) {

            // Init timeline
            positionTimeline( timeline, 0 )

            // Add click events to selector buttons
            const selectorButtons = timeline.querySelectorAll('.timeline-selector > div')
            for( [index, selectorButton] of selectorButtons.entries() ) {
                const i = index
                selectorButton.addEventListener('click', function() {
                    positionTimeline( timeline, i )
                })
            }

            // Make sure timeline doesen't break on resize
            window.addEventListener("resize", function() {
                positionTimeline( timeline )
            })
        }
    }
})