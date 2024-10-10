<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="rrr.css">
    <title>Login Page</title>

</head>
<body>
    <?php include 'header.php'; ?>
<div class="container-fluid mt-5 pt-5 d-flex justify-content-center align-items-center vh-100">
<form action="login.php" method="POST" class="mx-auto col-12 col-sm-8 col-md-6 col-lg-4 p-5" onsubmit="return validate()">
<h3 class="text-center pb-5">Login</h3>

    <div class="row mb-3">
        <div class="col-md-12"> 
        <input type="email" class="custom-input" id="email1" name="email" aria-describedby="emailHelp" placeholder="email">
        </div>
    </div>

  <div class="mb-3">
    <input type="password" class="custom-input" id="password1" name="pass" placeholder="password">
    <div id="forgrt" class="form-text">Forget email?</div>
  </div>

 <div class="d-flex justify-content-center"><button type="submit" class="btn-primary"><span style="color: white;">Login</span></button></div>
  <div class="text-center mt-3"><p>Dont have an account? <a href="signUp.php">Sign Up</a></p></div>

  <div class="position-relative">
    <hr class="text-secondary divider">
    <div class="divide-content-center">or</div>
</div>
<div class="text-center pt-2"><p>Continue with</p></div>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-auto image-wrapper">
                <a href="#"><img class="imag" src="icons8-google.svg" alt="Google"></a>
                <a href="#"><img class="aple" src="logos--apple.svg" alt="Apple"></a>
            </div>
        </div>
    </div>

</form>
</div>
<script src="validation.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
