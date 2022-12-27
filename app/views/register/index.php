<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="stylsheet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <form method="POST">
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                        alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Register!</h3>

                                        <div class="row">
                                            <div class="form-outline mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="form-outline mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1m1"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="form3Example1m1">Last
                                                            name</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="form3Example8"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example8">Post Code</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="text" id="form3Example8"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example8">Address</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="emailInput"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example90">Email</label>
                                            </div>


                                            <!-- Password field -->

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="password" class="form-control form-control-lg" id="passwordInput"
                                                        name="password">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-secondary"
                                                            id="passwordToggleButton">
                                                            Show password
                                                        </button>
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


                                            <div class="form-outline mb-4">
                                                <input type="text" id="form3Example99"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example99">Course</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="form3Example97"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example97">Email ID</label>
                                            </div>

                                            <div class="d-flex justify-content-end pt-3">
                                                <a type="button" class="btn btn-light btn-lg" href="/login">Cancel</a>
                                                <button type="button" class="btn btn-warning btn-lg ms-2">Submit
                                                    form</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    < /body>

    <
    /html>