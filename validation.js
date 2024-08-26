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

function doctorvalidate() {
    const dname = document.getElementById('dname').value.trim();
    const nic = document.getElementById('nic').value.trim();
    const email = document.getElementById('email').value.trim();
    const speciality = document.getElementById('speciality').value;

    // Validate Doctor Name 
    if (dname === "") {
        alert("Please enter the Doctor's Name.");
        return false;
    }

    // Validate NIC
    const nicPattern = /^(\d{9}[VvXx]|\d{12})$/;
    if (nic === "" || !nicPattern.test(nic)) {
        alert("Please enter a valid NIC. It should be either 9 digits followed by V/v/X/x or 12 digits.");
        return false;
    }

    // Validate Email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "" || !emailPattern.test(email)) {
        alert("Please enter a valid Email address.");
        return false;
    }

    // Validate Speciality 
    if (speciality === "") {
        alert("Please select a Speciality.");
        return false;
    }

    // If all validations pass, return true
    return true;
}