document.addEventListener('DOMContentLoaded', function () {
    setTimeout(() => {
        const allColors = document.querySelectorAll('.colors-group .acf-input div.acf-button-group label')
        allColors &&
            allColors.forEach((color) => {
                let colorValue = color.textContent
                colorValue = colorValue
                    .toLowerCase()
                    .replace(' ', '')
                    .replace(/ /g, '-')
                    .replace(/[^\w-]+/g, '')

                const label = color.closest('label')
                label.classList.add(colorValue)

                label.insertAdjacentHTML('beforeend', `<span class="color-name">${colorValue}</span>`)
            })
    }, 100)
})
