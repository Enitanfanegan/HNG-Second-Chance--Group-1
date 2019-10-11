const signUp = document.getElementById('signUp-btn')
const signUp_inp = document.querySelectorAll('input')
const message = document.querySelector('.message')
const password = document.querySelector('#inPass')
const confirm_password = document.querySelector('#cnfPass')
const passErr = document.querySelector('.passMessage')
const errMessage = document.querySelector('.errMessage')
const username = document.getElementById('Uname')

signUp.addEventListener('click', e => {
    e.preventDefault()
    for (let i = 0; i < signUp_inp.length; i++) {
        if(signUp_inp[i].name === 'username' || signUp_inp[i].name === 'password'){
            console.log(username.value.length)
            if (username.value.length < 5){
                errMessage.style.display = 'block'
                errMessage.innerHTML = 'Username must be 5 or above'
                console.log('username is not valid')
            }
            else if(password.value.length < 6 && password.value !== ''){
                errMessage.style.display = 'block'
                errMessage.innerHTML = 'Password must be 6 or above'
                console.log('password field')
            }
            else{
                console.log('username is valid')
                errMessage.style.display = 'none'
                errMessage.innerHTML = ''
            }
        }
        if(signUp_inp[i].value < 5){
            message.style.display = 'block'
        }
        else{
            message.style.display = 'none'
        }
    }
    if (password.value !== '' && confirm_password.value !== '' && password.value !== confirm_password.value) {
        passErr.style.display = 'block'
    }
    else{
        passErr.style.display = 'none'
    }

    const validateEmail = (email) => {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    let email = document.getElementById('inputEmail').value
    const validate = () => {
        var result = document.querySelector('.emailErr');

        if (validateEmail(email)) {
            result.style.display = 'none'
        } else {
            result.style.display = 'block'
        }
        return false;
    }
    if(email != ''){
        validate()
    }

})
