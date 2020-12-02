// show or hide vehicle registration filed onclick yes or no
function vehiclereg(x){
    if (x==1){
        document.getElementById('vehiclereg').style.display='block';
    }else{
        document.getElementById('vehiclereg').style.display='none';
    }
}


// show or hide password field onclick client or employee
function showpassword(y){
    if (y==1){
        document.getElementById('password1').style.display='block';
        document.getElementById('password2').style.display='block';
    }else{
        document.getElementById('password1').style.display='none';
        document.getElementById('password2').style.display='none';
    }
}

// regex validation
var password = document.getElementById('password');
var error = document.getElementById('error');

function validate(form){
    password.addEventListener('input', function(e)  {
        var regex = /(?=.*[a-z])(?=.*[0-9])(?=.*[A-Z])(?=.*[?@!#$%^&*_=+|}{"':;><,~`])[a-zA-Z0-9?@!#$%^&*_=+|}{"':;><,~`]{8,}/
        var currentvalue = e.target.value;
        var validate = regex.test(currentvalue);

            if (validate){
                e.preventDefault();
                error.style.display = 'none';
                return false;
            }else{
                error.style.display = 'block';
                return true;
            }  
    })
}
