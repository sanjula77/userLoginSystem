<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form  method="post" class=" form-container mx-5" onsubmit="return doctorvalidate();">
    <!--Doctor Name -->
    <div class="col-12">
        <label for="dname" class=" form-label">Doctor Name</label>
        <input type="text" class=" form-control" name="dname" id="dname" placeholder="Please Enter the Doctor Name" >
    </div>
    <!--Doctor NIC -->
    <div class="col-12">
        <label for="nic" class=" form-label">NIC</label>
        <input type="text" class=" form-control" placeholder="Enter NIC" name="nic" id="nic">
    </div>
    <!--Doctor Email -->
    <div class="col-12">
        <label for="email" class=" form-label">Email</label>
        <input type="text" name="email" id="email" placeholder=" Please Enter the Email" class=" form-control" >
    </div>
    <div class="col-12">
        <button class="btn btn-dark" name="submit" type="submit">Submit</button>
    </div>
    <button type="button" onclick="vlidate()">Su</button>
    <!--Doctor Speciality -->
    <div class="col-12">
        <label for="speciality" class=" form-label my-0">Select Speciality</label>
        <select name="speciality" id="speciality" class=" form-select mt-0 my-2" >
            <option value="" disabled selected>Select Speciality</option>
            <?php while ($row = mysqli_fetch_assoc($resultset)) { ?>
                <option value="<?php echo $row['specialization']; ?>"><?php echo $row['specialization']; ?></option>
            <?php } ?>
        </select>
    </div>
    
</form>

<script>

function vlidate(){
    const dname = document.getElementById('dname').value.trim();
    if(dname == null || dname == ""){
        alert("Please enter the Doctor's Name.");
        return false;
    }
}

    function doctorvalidate() {
    
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
</script>
</body>
</html>

