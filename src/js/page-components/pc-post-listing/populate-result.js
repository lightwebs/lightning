import { searchItem } from './searchitem'

let post_list

export function populateResults() {
    const searchInput = document.querySelector('.search-input')
    if (!searchInput) {
        return
    }
    const searchId = searchInput.getAttribute('data-search-id')
    const listingContainer = searchInput.closest('.pc-post-listing')
    const searchResult = listingContainer.querySelector('.search-result')
    const searchIndex = `${liGlobal.templateDirectory}/search-results/${searchId}_result.json`

    fetch(searchIndex)
        .then((blob) => blob.json())
        .then((datas) => {
            post_list = [...datas].map((data) => {
                return data
            })

            const searchItems = post_list
                .map((post) => {
                    const id = post.id
                    const title = post.title
                    const link = post.link
                    const categories = post.categories
                    const img = post.img
                    const job_title = post.job_title
                    const company = post.company
                    const talk_heading = post.talk_heading
                    const description = post.description
                    const start_time = post.start_time
                    const end_time = post.end_time
                    const info = post.info

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

            searchResult.innerHTML = searchItems
        })
        .catch((error) => {
            console.log(error)
        })
}

document.addEventListener('DOMContentLoaded', populateResults)
