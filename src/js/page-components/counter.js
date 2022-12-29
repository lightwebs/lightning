import gsap from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'
gsap.registerPlugin(ScrollTrigger)

// Animates numbers to count up from 0 to the number in the element
// Use "counter" class on the element
gsap.from('.counter', {
    textContent: '0',
    duration: 2,
    ease: 'power1.easeIn',
    modifiers: {
        textContent: (value) => Math.round(value),
    },
    stagger: 0.2,

    // Use "animate-counter" on the element that should trigger the above animation when scrolled into view
    scrollTrigger: {
        trigger: '.animate-counter',
        start: '100px 100%',
        end: '+=100',
        toggleActions: 'play none none none',
    },
})
