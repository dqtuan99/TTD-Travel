let form_input = document.getElementsByClassName('form-control')

let username_error = document.getElementById('username_error')
let fullname_error = document.getElementById('fullname_error')
let email_error = document.getElementById('email_error')
let password_error = document.getElementById('password_error')
let repass_error = document.getElementById('repass_error')

function isUsername(username) {
  let regex = /^[a-zA-Z0-9]{8,32}$/

  return regex.test(username)
}

function isFullname(fullname) {
  let regex = /^[a-zA-Z/\s]+$/

  return regex.test(fullname);
}

function isEmail(email) {
  let regex = /^([a-zA-Z0-9]+([._-]?[a-zA-Z0-9]+)*)+@([a-zA-Z0-9]+([-]?[a-zA-Z0-9]+)*)+([.][a-zA-Z]{2,4})+$/

  return regex.test(email)
}

function isPassword(password) {
  let regex = /^[!@#$%^&*a-zA-Z0-9]{8,32}$/

  return regex.test(password)
}

function chuanHoaTen(name) {
  subname = name.replace(/\s+/g, ' ').split(' ');
  let temp = "";
  for (let i = 0; i < subname.length; ++i){
    temp += " " + subname[i].charAt(0).toUpperCase() + subname[i].slice(1);
  }

  return temp.trim();
}

function checkSignup() {
  let no_error_yet = true
  let username = document.getElementById('username')
  let fullname = document.getElementById('fullname')
  let email = document.getElementById('email')
  let password = document.getElementById('password')
  let repass = document.getElementById('repass')

  username_error.innerHTML = fullname_error.innerHTML = email_error.innerHTML = password_error.innerHTML = repass_error.innerHTML = ''
  fullname.value = chuanHoaTen(fullname.value)

  if (!isUsername(username.value) && no_error_yet){
    username_error.innerHTML = 'Username should contain only letters and numbers from 8 to 32 characters.'
    no_error_yet = false
  }
  if (!isFullname(fullname.value) && no_error_yet){
    fullname_error.innerHTML = 'Please enter a valid name. For example: Elon Musk.'
    no_error_yet = false
  }
  if (!isEmail(email.value) && no_error_yet){
    email_error.innerHTML = 'Please enter a valid email address. For example: email_address@gmail.com.'
    no_error_yet = false
  }
  if (password.value != repass.value && no_error_yet){
    repass_error.innerHTML = 'The password and confirmation password do not match.'
    no_error_yet = false
  }
  if (!isPassword(password.value) && no_error_yet){
    password_error.innerHTML = 'Password should contain only letters, numbers and /!@#$%^&*/ from 8 to 32 characters.'
    no_error_yet = false
  }

  if (no_error_yet){
    document.getElementById('signup-form').submit()
  }
}

function checkLogin() {
  let no_error_yet = true
  let username = document.getElementById('username2')
  let password = document.getElementById('password2')

  let login_error = document.getElementById('login_error')
  login_error.innerHTML = ''

  if (username.value != 'tuank62ie1' || password.value != 'quangtuan99'){
    login_error.innerHTML = 'Username or password incorrect, please try again.'
    no_error_yet = false
  }

  if (no_error_yet){
    document.getElementById('login-form').submit()
  }
}

Array.from(form_input).forEach(function(element) {
  element.addEventListener('click', () => {
    username_error.innerHTML = fullname_error.innerHTML = email_error.innerHTML = password_error.innerHTML = repass_error.innerHTML = ''
    login_error.innerHTML = ''
  })
})
