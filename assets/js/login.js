const inpText = document.getElementById('inp-text')
const inpPass = document.getElementById('inp-pass')
const login = document.querySelector('.button')
const message = document.querySelector('.message')


login.addEventListener('click', e => {
    e.preventDefault()
    if (inpPass.value !== '' && inpText.value !== '') {
        if (inpPass.value.length < 6) {
            message.style.display = 'block'
            message.innerHTML = 'password must be 6 or more'
        }
        else if (inpText.value.length < 5) {
            message.style.display = 'block'
            message.innerHTML = 'Username must be 5 or more'
        }
        else {
            message.style.display = 'none'
        }
    } else {
        message.style.display = 'block'
        message.innerHTML = 'Name fields cannot be empty'
    }
})

