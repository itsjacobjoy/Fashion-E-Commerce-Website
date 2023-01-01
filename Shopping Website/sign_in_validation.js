function load()
{
    window.location = 'shop.html';
}
var e_format = /[@]/; 
function check(){
    var fname = document.getElementById('fname');
    const lname = document.getElementById('lname');
    const email = document.getElementById('email');
    const user = document.getElementById('user');
    const pass = document.getElementById('password');
    const re_pass = document.getElementById('re_password');
    const f_error = document.getElementById('fname_error');
    const l_error = document.getElementById('lname_error');
    const e_error = document.getElementById('email_error');
    const u_error = document.getElementById('user_error');
    const p_error = document.getElementById('pass_error');
    const rep_error = document.getElementById('repass_error');
    const c_error = document.getElementById('char');


    if(pass.value!=re_pass.value){
        rep_error.textContent = "Passwords do not match";
        rep_error.style.color = "red";
        return false;
    }

    if(pass.value.length<6){
        rep_error.textContent = "Password should be more than 6 characters";
        rep_error.style.color = "red";
        return false;
    }

    if(fname.value =="" || fname.value==null){
        f_error.textContent = "Field cannot be empty";
        f_error.style.color = 'red';
        return false;
    }

    if(lname.value=="" || lname.value==null){
        l_error.textContent = "Field cannot be empty";
        l_error.style.color = 'red';
        return false;
    }

    if(email.value=="" || email.value==null){
        e_error.textContent = "Field cannot be empty";
        e_error.style.color = 'red';
        return false;
    }

    if(user.value=="" || user.value==null){
        u_error.textContent = "Field cannot be empty";
        u_error.style.color = 'red';
        return false;
    }

    if(pass.value=="" || pass.value==null){
        p_error.textContent = "Field cannot be empty";
        p_error.style.color = 'red';
        return false;
    }

    if(re_pass.value=="" || re_pass.value==null){
        rep_error.textContent = "Field cannot be empty";
        rep_error.style.color = 'red';
        return false;
    }

    if(email.value.match(e_format)){
        alert('Welcome '+fname.value);
        return true;
    }
    else{
        e_error.textContent = "Invalid Email Address";
        e_error.style.color = "red";
        return false;
    }

}