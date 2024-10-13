<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Page</title>
    <!-- Include Google Sign-In API -->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <meta name="google-signin-client_id" content="296813048340-jjg4i8ecfig93fmigmcs6lcaqi8gh6mb.apps.googleusercontent.com">
    <link rel="stylesheet" href="rrr.css">
</head>
<body>
    <div class="container-fluid mt-5 pt-5 d-flex justify-content-center align-items-center vh-100">
        <form action="login.php" method="POST" class="mx-auto col-12 col-sm-8 col-md-6 col-lg-4 p-5">
            <h3 class="text-center pb-5">Login</h3>

            <!-- Email and Password Login -->
            <div class="row mb-3">
                <div class="col-md-12">
                    <input type="email" class="form-control" id="email1" name="email" placeholder="Email">
                </div>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" id="password1" name="pass" placeholder="Password">
                <div id="forgot" class="form-text">Forgot password?</div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            <div class="text-center mt-3">
                <p>Don't have an account? <a href="signUp.php">Sign Up</a></p>
            </div>

            <!-- Divider and Google Sign-In -->
            <div class="position-relative">
                <hr class="text-secondary">
                <div class="text-center">or</div>
            </div>
            <div class="text-center pt-2">
                <p>Continue with</p>
            </div>
           

            <!-- Google Image Button (Add your custom icon here) -->
            <div class="text-center mt-3">
                <a href="loginWithGoogle.php"><img class="imag" src="icons8-google.svg" alt="Google"></a>
            </div>

        </form>
    </div>

    <!-- JavaScript to handle Google Sign-In -->
    <script>
        function handleCredentialResponse(response) {
            console.log("Encoded JWT ID token: " + response.credential);
            // Send the token to your server for verification and login
            fetch('loginWithGoogle.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ credential: response.credential })
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      // Redirect to dashboard or homepage
                      window.location.href = 'dashboard.php';
                  } else {
                      alert('Google Sign-In failed.');
                  }
              });
        }

        window.onload = function () {
            google.accounts.id.initialize({
                client_id: "296813048340-jjg4i8ecfig93fmigmcs6lcaqi8gh6mb.apps.googleusercontent.com",
                callback: handleCredentialResponse
            });
            google.accounts.id.renderButton(
                document.querySelector(".g_id_signin"),
                { theme: "outline", size: "large" }
            );
        };
    </script>
    <script src="validation.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
