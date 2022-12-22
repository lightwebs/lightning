import './populate-result'
import Fuse from 'fuse.js'
import { populateResults } from './populate-result'
import { searchItem } from './searchitem'
const minSearchLength = 1
let post_list, fuse

// Fetch search index and initialize search.
function fetchSearchResults(searchId) {
    const searchIndex = `${liGlobal.templateDirectory}/search-results/${searchId}_result.json`
    const searchInput = document.querySelector(`.search-input[data-search-id=${searchId}]`)

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
                    { name: 'title', weight: 0.6 },
                    { name: 'content', weight: 0.2 },
                    { name: 'cats', weight: 1 },
                    { name: 'city', weight: 1 },
                ],
            }

            fuse = new Fuse(post_list, options)
            let results = fuse.search(searchInput.value)
            displayMatches(searchId, results, searchInput)
        })
        .catch((error) => {
            console.log(error)
        })
}

// Display search results.
function displayMatches(searchId, results, searchInput) {
    const listingContainer = searchInput.closest('.pc-article-listing')
    const searchResult = listingContainer.querySelector('.search-result')

    results = fuse.search(searchInput.value)
    const htmlLang = document.querySelector('html').getAttribute('lang')
    const currentLang = htmlLang.split('-')[0]
    let timeoutId

    clearTimeout(timeoutId)
    timeoutId = setTimeout(() => {
        timeoutId = null
        if (searchInput.value.length < minSearchLength && results.length === 0) {
            console.log(searchInput.value, minSearchLength, results.length)
            populateResults()
            return
        }
    }, 300)

    const searchItems = results
        .map((post) => {
            const id = post.item.id
            const title = post.item.title
            const link = post.item.link
            const categories = post.item.categories
            const img = post.item.img
            const job_title = post.item.job_title
            const company = post.item.company
            const talk_heading = post.item.talk_heading
            const description = post.item.description
            const start_time = post.item.start_time
            const end_time = post.item.end_time
            const info = post.item.info

            return searchItem(
                id,
                title,
                link,
                categories,
                img,
                job_title,
                company,
                talk_heading,
                description,
                start_time,
                end_time,
                info
            )
        })
        .join('')

    if (results.length < 1 && searchInput.value.length > minSearchLength) {
        searchResult.innerHTML = /*html*/ `
                          <div class="no-results py-24">
                              <p class="text-center text-sm">${
                                  currentLang === 'sv'
                                      ? 'Inga resultat, prova något annat.'
                                      : 'No results, please try something else.'
                              }</p>
                          </div>`
    } else {
        searchResult.innerHTML = searchItems
    }
}

// Search on input.
document.addEventListener('keyup', function (e) {
    if (e.target.classList.contains('search-input')) {
        const searchInput = e.target
        const searchId = searchInput.getAttribute('data-search-id')

        if (e.key === 'Escape') {
            e.target.value = ''
            populateResults()
            return
        }

        if (e.key.match(/^[a-z0-9\s\b]$/i) || e.key === 'Backspace' || e.key === 'Delete') {
            fetchSearchResults(searchId)
        }
    }
})

// // Search on filter change.
// document.addEventListener('change', function (e) {
//     if (e.target.classList.contains('filter')) {
//         displayMatches()
//     }
// })
