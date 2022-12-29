
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <form method="POST">
        <section class="h-100 bg-dark">s
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="https://play-lh.googleusercontent.com/gIiZK9ZUU7tt8N08ozfe8OPBnW-KPREAHdbN1WDvqqSscVdAQuuP2_i2c1Gm2zHJ_S9x"
                                        alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Register!</h3>

                                        <div class="row">
                                            <div class="form-outline mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="firstnameRegister"
                                                        class="form-control form-control-lg" name="firstnameRegister" />
                                                    <label class="form-label" for="firstnameInput">First name</label>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="form-outline mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="lastNameRegister"
                                                            class="form-control form-control-lg" name="lastnameRegister" />
                                                        <label class="form-label" for="lastNameInput">Last
                                                            name</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="postcodeRegister"
                                                    class="form-control form-control-lg" name="postcodeRegister" />
                                                <label class="form-label" for="postcodeInput">Post Code</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="text" id="addressInput"
                                                    class="form-control form-control-lg" name="addressRegister" />
                                                <label class="form-label" for="addressInput">Address</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="emailRegister" class="form-control form-control-lg"
                                                    name="emailRegister" />
                                                <label class="form-label" for="emailInput">Email</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="date" id="birthdateInput"
                                                    class="form-control form-control-lg" name="birthdateRegister" />
                                                <label class="form-label" for="birthdateInput">BirthDate</label>
                                            </div>


                                            <!-- Password field -->

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="password" class="form-control form-control-lg"
                                                        id="passwordInput" name="passwordRegister">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-secondary"
                                                            id="passwordToggleButton">
                                                            Show password
                                                        </button>s
                                                    </div>
                                                </div>
                                                <label for="passwordInput" class="form-control-label">Password</label>
                                            </div>
                                            <script>
                                            document.getElementById('passwordToggleButton').addEventListener('click',
                                                function() {
                                                    var passwordInput = document.getElementById('passwordInput');
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
                                            <!--End password field -->

                                            <div class="d-flex justify-content-end pt-3">
                                                <a type="button" class="btn btn-light btn-lg" href="/login">Cancel</a>
                                                <button name="registerBtn" type="submit"
                                                    class="btn btn-warning btn-lg ms-2">Register</button>
                                            </div>
                                        </div>
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