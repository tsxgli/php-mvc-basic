<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="stylsheet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form method="POST">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your email and password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name= "emailInput"id="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                
                                    <div class="form-group">
                                                <div class="input-group">
                                                    <input type="password" class="form-control form-control-lg" id="password"
                                                        name="passwordInput">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-secondary ml-2"
                                                            id="passwordToggleButton">
                                                            Show password
                                                        </button>
                                                    </div>
                                                </div>
                                                <label for="password" class="form-control-label">Password</label>
                                            </div>
                                            <script>
                                            document.getElementById('passwordToggleButton').addEventListener('click',
                                                function() {
                                                    var passwordInput = document.getElementById('password');
                                                    var passwordToggleButton = this;

                                                    if (passwordInput.type === 'password') {
                                                        passwordInput.type = 'text';
                                                        passwordToggleButton.innerHTML = 'Hide password';
                                                    } else {
                                                        passwordInput.type = 'password';
                                                        passwordToggleButton.innerHTML = 'Show password';
                                                    }
                                                });
                                            </script>

                                    <p class="small mb-5 pb-lg-2">
                                        <a class="text-white-50" href="#!">Forgot password?</a>
                                    </p>
                                    <button class="btn btn-outline-light btn-lg px-5" name="loginButton"id="loginButton" type="submit">Login</button>
                                </div>

                                <div>
                                    <p class="mb-0">Don't have an account?
                                        <a href="/register" class="text-white-50 fw-bold">Sign Up</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    </body>

    </html>