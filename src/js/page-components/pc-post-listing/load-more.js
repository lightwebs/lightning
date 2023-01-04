const postCount = document.querySelector('.pc-post-listing .post-count')
const filters = document.querySelectorAll('.filter')
const searchInput = document.querySelector('.search-input')
let paged = 1

export const loadPosts = async (e, target) => {
    let cleanResult = false,
        loadMoreBtn,
        postContainer,
        excludePosts
    const data = new FormData()
    if (e.target.classList.contains('pc-load-more')) {
        excludePosts = [...document.querySelectorAll('[data-post-id]')].map((exP) => exP.dataset.postId)
        loadMoreBtn = e.target

        const postListing = loadMoreBtn.closest('.pc-post-listing')
        data.append('card_bg_color', postListing.dataset.cardBg)
        data.append('card_text_color', postListing.dataset.cardText)

        if (loadMoreBtn.dataset.masonry != '') {
            data.append('masonry', true)
        }

        postContainer = postListing.querySelector('.post-container')
    } else {
        loadMoreBtn = document.querySelector('.pc-load-more')
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

    loadMoreBtn.classList.remove('hidden')
}

document.addEventListener('click', function (e) {
    if (e.target.classList.contains('pc-load-more')) {
        e.preventDefault()
        const loadMore = 'loadmore'
        loadPosts(e, loadMore)
    }

    if (e.target.classList.contains('pc-filter')) {
        const filter = 'filter'
        loadPosts(e, filter)
    }

    if (e.target.classList.contains('pc-btn-reset')) {
        const reset = 'reset'
        loadPosts(e, reset)
    }
})
