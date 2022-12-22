function deleteProfile() {
    const data = new FormData()

    data.append('action', 'delete_profile')
    data.append('security', liGlobal.deleteProfile)

    fetch(liGlobal.ajaxUrl, {
        method: 'POST',
        body: data,
    })
        .then((response) => {
            if (response.ok) {
                document.querySelector('.update-message').innerHTML = `<span class="error">Profile deleted</span>`

                setTimeout(() => {
                    window.location.href = liGlobal.homeUrl
                }, 2000)
            }
        })
        .catch((error) => {
            console.log(error)
        })
}

document.addEventListener('click', function (e) {
    if (e.target.classList.contains('delete-profile')) {
        e.preventDefault()
        document.querySelector('.delete-message').classList.remove('d-none')
        document.querySelector('.delete-message').classList.add('d-block')
        document.querySelector('.delete-profile').classList.add('d-none')
    }

    if (e.target.classList.contains('delete-profile-confirm')) {
        e.preventDefault()
        deleteProfile()
    }

    if (e.target.classList.contains('delete-profile-cancel')) {
        e.preventDefault()
        document.querySelector('.delete-message').classList.remove('d-block')
        document.querySelector('.delete-message').classList.add('d-none')
        document.querySelector('.delete-profile').classList.remove('d-none')
    }
})
