<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="rrr.css">
    <title>sign up page</title>
</head>
<body>
<?php include 'header.php'; ?>

<div class="container-fluid mt-5 pt-5 d-flex justify-content-center align-items-center vh-100">
    <form action="insert.php" method="post" class="mx-auto col-12 col-sm-8 col-md-6 col-lg-4 p-5" onsubmit="return validate()">
    <h3 class="text-center pb-5">Create account</h3>

    <div class="row mb-3">
        <div class="col-md-12"> 
        <input type="email" class="custom-input" id="email1" name="email" aria-describedby="emailHelp" placeholder="email">
        </div>
    </div>

  <div class="mb-3">
    <input type="type" class="custom-input" id="uName" name="uName" placeholder="Username">
  </div>

  <div class="mb-3">
    <input type="password" class="custom-input" id="password1" name="pass" placeholder="password">
  </div>

  <div class="mb-3">
    <input type="password" class="custom-input" id="password2" name="cnfmPass" placeholder="conform password">
  </div>

  <div class="d-flex justify-content-center"><button type="submit" class="btn-primary"><span style="color: white;">Sign up</span></button></div>
    </form>

</div>

</body>
</html>