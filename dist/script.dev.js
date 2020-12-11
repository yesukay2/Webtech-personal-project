"use strict";

// show or hide vehicle registration filed onclick yes or no
function vehiclereg(x) {
  if (x == 1) {
    document.getElementById('vehiclereg').style.display = 'block';
    document.getElementById('vehicle-reg').required = true;
  } else {
    document.getElementById('vehiclereg').style.display = 'none';
    document.getElementById('vehicle-reg').required = false;
  }
} // show or hide password field onclick client or employee


function showpassword(y) {
  if (y == 1) {
    document.getElementById('password1').style.display = 'block';
    document.getElementById('password2').style.display = 'block';
    document.getElementById('pass1').required = true;
    document.getElementById('pass2').required = true;
  } else {
    document.getElementById('password1').style.display = 'none';
    document.getElementById('password2').style.display = 'none';
    document.getElementById('pass1').required = false;
    document.getElementById('pass2').required = false;
  }
}

function validate() {
  // regex validation
  var password = document.getElementById('pass1').value;
  var error = document.getElementById('error');
  var regex = /(?=.*[a-z])(?=.*[0-9])(?=.*[A-Z])(?=.*[?@!#$%^&*_=+|}{"':;><,~`])[a-zA-Z0-9?@!#$%^&*_=+|}{"':;><,~`]{8,}/;
  var currentvalue = password; // console.log(currentvalue);

  var validate = regex.test(currentvalue);

  if (validate) {
    // console.log('passed test!');
    error.style.display = 'none';
    var password2 = document.getElementById('pass2').value;
    var error2 = document.getElementById('error2');

    if (password != password2) {
      error2.style.display = 'block';
      return false;
    } else {
      error2.style.display = 'none';
      return true;
    }
  } else {
    // console.log('failed test!');
    error.style.display = 'block';
    return false;
  }
}