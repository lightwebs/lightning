// export const loadMoreBtn = document.querySelector('.load-more')
const postCount = document.querySelector('.post-listing .post-count')
const filters = document.querySelectorAll('.filter')
const searchInput = document.querySelector('.main-search-input')
let paged = 1

export const loadPosts = async (e, target) => {
    let cleanResult = false,
        loadMoreBtn,
        postContainer,
        excludePosts
    const data = new FormData()
    if (e.target.classList.contains('load-more')) {
        excludePosts = [...document.querySelectorAll('[data-post-id]')].map((exP) => exP.dataset.postId)
        loadMoreBtn = e.target
        const articleListing = loadMoreBtn.closest('.container')
        postContainer = articleListing.querySelector('.post-listing')

        if (loadMoreBtn.dataset.catId) {
            data.append('cat_id', loadMoreBtn.dataset.catId)
        }

        if (loadMoreBtn.dataset.searchQuery) {
            data.append('search_query', loadMoreBtn.dataset.searchQuery)
        }
    } else {
        loadMoreBtn = document.querySelector('.load-more')
    }

    if (target === 'filter') {
        paged = 1
        cleanResult = true
        searchInput.value = ''
    } else if (target === 'loadmore') {
        loadMoreBtn.classList.add('loading')
        cleanResult = false
        if (excludePosts.length > 0) {
            data.append('exclude', excludePosts)
        }
        data.append('post_type', loadMoreBtn.dataset.postType)
        data.append('card_bg_color', 'bg-white')
        data.append('card_text_color', 'text-black')
        paged++
    } else if (target === 'reset') {
        paged = 1
        cleanResult = true
        searchInput.value = ''
        filters.forEach((filter) => (filter.checked = false))
    }

    data.append('action', 'load_more')
    data.append('security', liGlobal.loadMore)
    data.append('paged', paged || 1)

    if (filters) {
        const filterArray = []
        filters.forEach((filter) => {
            if (filter.checked) {
                filterArray.push(filter.dataset.tagId)
            }
        })
        data.append('filter', filterArray)
    }

    fetch(liGlobal.ajaxUrl, {
        method: 'POST',
        body: data,
    })
        .then((response) => response.text())
        .then((response) => {
            response = JSON.parse(response)
            if (!response.success) {
                return
            }

            if (response.data.load_more_btn_text === 'Inga fler inlägg') {
                loadMoreBtn.setAttribute('disabled', 'disabled')
                loadMoreBtn.classList.remove('loading')
            } else {
                loadMoreBtn.removeAttribute('disabled')
            }

            loadMoreBtn.textContent = response.data.load_more_btn_text

            loadMoreBtn.classList.remove('loading')

            const posts = response.data.posts

            if (!cleanResult) {
                posts.forEach((post) => {
                    postContainer.insertAdjacentHTML('beforeend', post)
                })
            } else {
                postContainer.innerHTML = ''
                posts.forEach((post) => {
                    postContainer.insertAdjacentHTML('beforeend', post)
                })
            }

            // postCount.textContent = response.data.found_posts
        })
        .catch((error) => {
            console.error('error ' + error)
        })

    loadMoreBtn.classList.remove('d-none')
}

document.addEventListener('click', function (e) {
    if (e.target.classList.contains('load-more')) {
        e.preventDefault()
        const loadMore = 'loadmore'
        loadPosts(e, loadMore)
    }

    if (e.target.classList.contains('filter')) {
        const filter = 'filter'
        loadPosts(e, filter)
    }

    if (e.target.classList.contains('btn-reset')) {
        const reset = 'reset'
        loadPosts(e, reset)
    }
})
