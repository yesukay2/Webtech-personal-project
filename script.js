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



function validate(){
    // regex validation
var password = document.getElementById('password').value;
var error = document.getElementById('error');

    console.log('got here');
    var regex = /(?=.*[a-z])(?=.*[0-9])(?=.*[A-Z])(?=.*[?@!#$%^&*_=+|}{"':;><,~`])[a-zA-Z0-9?@!#$%^&*_=+|}{"':;><,~`]{8,}/
    var currentvalue = password;
    console.log(currentvalue);
    var validate = regex.test(currentvalue);

        if (validate){
            console.log('passed test!');
            error.style.display = 'none';
            return false;
        }else{
            console.log('failed test!');
            error.style.display = 'block';
            return true;
        }  
}
