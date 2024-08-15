<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login Page</title>

</head>
<body>
    <?php include 'header.php'; ?>
<div class="container-fluid mt-5 pt-5">
<form>

  <div class="mb-3">
    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="email">
  </div>

  <div class="mb-3">
    <input type="password" class="form-control" id="password1" placeholder="password">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="check">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
