function validate(){
    let email = document.getElementById("email1").value;
    if(email == null || email == ""){
        alert('Please enter your email');
        return false;
    }
}