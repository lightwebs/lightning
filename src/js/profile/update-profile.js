function updateProfile() {
    const profileInputs = document.querySelectorAll('#profile-form input')
    const passwordInputs = document.querySelectorAll('#profile-form input[type="password"]')
    // check if password inputs are equal
    if (passwordInputs[0].value !== passwordInputs[1].value) {
        document.querySelector('.update-message').innerHTML = `<span class="error">Passwords do not match</span>`
        return
    }

    const data = new FormData()

    data.append('action', 'update_profile')
    data.append('security', liGlobal.updateProfile)

    profileInputs.forEach((input) => {
        data.append([input.name], input.value)
    })

    // for (var pair of data.entries()) {
    //     console.log(pair[0] + ', ' + pair[1])
    // }

    fetch(liGlobal.ajaxUrl, {
        method: 'POST',
        body: data,
    })
        .then((response) => {
            if (response.ok) {
                document.querySelector('.update-message').innerHTML = `<span class="success">Profile updated</span>`
            } else {
                document.querySelector(
                    '.update-message'
                ).innerHTML = `<span class="error">Error updating profile</span>`
            }
        })
        .catch((error) => {
            console.log('error' + error)
        })
}

document.addEventListener('click', function (e) {
    if (e.target.classList.contains('update-profile-btn')) {
        e.preventDefault()
        updateProfile()
    }
})
