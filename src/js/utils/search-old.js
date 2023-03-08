import Fuse from 'fuse.js'
// import { loadMoreBtn } from './ajax-load-more'
const searchResultWrapper = document.querySelector('.search-result-wrapper')
const searchResult = document.querySelector('.search-result')
const postCount = document.querySelector('.post-count')
// Check if dev
// const devLocations = ['localhost', '.dev', '192.', '.local']
// const isDev = devLocations.some((devLocation) => document.location.origin.includes(devLocation))

let searchIndex, post_list, fuse

function fetchSearchResults(searchId) {
    searchIndex = `${liGlobal.ABSPATH}/search-results/${searchId}_result.json`
    const searchInput = document.querySelector(`.main-search-input[data-search-id=${searchId}]`)
    const minSearchLength = 2

    fetch(searchIndex)
        .then((blob) => blob.json())
        .then((datas) => {
            post_list = [...datas].map((data) => {
                return data
            })
            const options = {
                includeScore: true,
                shouldSort: true,
                minMatchCharLength: minSearchLength,
                useExtendedSearch: true,
                threshold: 0.2,
                keys: [
                    { name: 'title', weight: 0.8 },
                    { name: 'excerpt', weight: 0.2 },
                ],
            }

            fuse = new Fuse(post_list, options)
            let results = fuse.search(searchInput.value)

            displayMatches(results)
        })
        .catch((error) => {
            console.log(error)
        })

    if (searchInput.value.length < minSearchLength) {
        searchResultWrapper.classList.remove('!block')
    }
}

function displayMatches(results) {
    const searchItems = results
        .map((post) => {
            const title = post.item.title || post.title
            const link = post.item.link || post.link
            let excerpt = post.item.excerpt || post.excerpt
            if (excerpt) {
                excerpt = excerpt.replace(/(<([^>]+)>)/gi, '')
            }
            const date = post.item.date || post.date
            const imgUrl = post.item.img || post.img
            const categories = post.item.category || post.category

            return /*html*/ `
                <a class="flex items-center gap-x-6 mb-3 md:mb-6" href="${link}">
                    ${
                        imgUrl
                            ? /*html*/ `<img class="aspect-square object-cover w-16" src="${imgUrl}" />`
                            : '<div class="aspect-square bg-slate-50 w-16"></div>'
                    }
                    <div class="body">
                        <div class="flex gap-x-4">
                            ${
                                categories
                                    ? /*html*/ `<small class="cats text-xs text-slate-500">${categories}</small>`
                                    : ''
                            }
                            ${date ? /*html*/ `<small class="card-date text-xs text-slate-500">${date}</small>` : ''}
                        </div>
                        <h4 class="text-base mb-0">${title}</h4>
                        ${excerpt ? /*html*/ `<p class="text-sm text-slate-800 dark:text-white/70">${excerpt}</p>` : ''}
                    </div>
                </a>
			`
        })
        .join('')
    postCount.textContent = results.length
    // loadMoreBtn && loadMoreBtn.classList.add('hidden')

    if (results.length > 0) {
        searchResultWrapper.classList.add('!block')
        searchResult.innerHTML = searchItems
    } else {
        searchResult.innerHTML = /*html*/ `
                            <div class="no-results py-10">
                                <h4 class="text-center">No results found</h4>
                                <p class="text-center text-sm">Please try with something else</p>
                            </div>`
    }
}

document.addEventListener('click', function (e) {
    if (e.target.classList.contains('search-toggle')) {
        const searchWrapper = e.target.nextElementSibling
        const searchInput = searchWrapper.querySelector('.main-search-input')
        searchWrapper.classList.toggle('!block')
        searchInput.focus()
    }
})
document.addEventListener('keyup', function (e) {
    if (e.target.classList.contains('main-search-input')) {
        if (e.key === 'Escape') {
            const searchWrapper = e.target.closest('.site-search-wrapper')
            searchWrapper.classList.remove('!block')
            return
        }

        const searchId = e.target.dataset.searchId
        fetchSearchResults(searchId)
    }
})
