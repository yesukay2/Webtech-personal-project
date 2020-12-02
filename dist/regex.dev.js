"use strict";

var password = document.getElementById('password');
var error = document.getElementById('error');
password.addEventListener('input', function (e) {
  var regex = /(?=.*[a-z])(?=.*[0-9])(?=.*[A-Z])(?=.*[?@!#$%^&*_=+|}{"':;><,~`])[a-zA-Z0-9?@!#$%^&*_=+|}{"':;><,~`]{8,}/g;
  var currentvalue = e.target.value;
  var validate = regex.test(currentvalue);

  if (validate) {
    error.style.display = 'none';
  } else {
    error.style.display = 'block';
  }
});