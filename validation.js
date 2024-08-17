function validate(){
    let email = document.getElementById("email1").value;
    let password = document.getElementById("password1").value;
    
    if(email == null || email == ""){
        alert('Please enter your email');
        return false;
    }if(password == null || password == ""){
        alert('Please enter password');
    }
}