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

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-dark">Email address</label>
                <div class="d-flex align-items-center">
                    <input type="email" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <button type="submit" class="btn btn-primary ms-3">validate</button>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-dark">Password</label>
                <div class="d-flex align-items-center">
                    <input type="password" class="form-control w-100" id="exampleInputPassword1">
                    <button type="submit" class="btn btn-primary ms-3">validate</button>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-dark">Phone</label>
                <div class="d-flex align-items-center">
                    <input type="password" class="form-control w-100" id="exampleInputPassword1">
                    <button type="submit" class="btn btn-primary ms-3">validate</button>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-dark">Username</label>
                <div class="d-flex align-items-center">
                    <input type="password" class="form-control w-100" id="exampleInputPassword1">
                    <button type="submit" class="btn btn-primary ms-3">validate</button>
                </div>
            </div>
        </form>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
