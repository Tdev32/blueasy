var userName = document.getElementById('name');
var userEmail = document.getElementById('mail');
var userMsg = document.getElementById('msg');
var nameErr = document.getElementById('nameErr');
var emailErr = document.getElementById('emailErr');
var msgErr = document.getElementById('msgErr');
var btn = document.getElementById('btn');
var regEx = /\S+@\S+\.\S+/;


userName.addEventListener('keyup', function() {
  if (userName.value == "" || userName.value.length < 6) {
    nameErr.innerHTML = "Please enter your name";
  } else {
    nameErr.innerHTML = "";
  }
});

userEmail.addEventListener('keyup', function() {
  if (userEmail.value == "" || userEmail.value.length < 8) {
    emailErr.innerHTML = "Please enter your email";
  } else {
    emailErr.innerHTML = "";
  }
});

userMsg.addEventListener('keyup', function() {
  if (userMsg.value == "" || userMsg.value.length < 10) {
    msgErr.innerHTML = "Please send us a message";
  } else {
    msgErr.innerHTML = "";
  }
});
