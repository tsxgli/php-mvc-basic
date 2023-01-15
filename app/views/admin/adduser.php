<?php
include __DIR__ . '/../header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="/javascript/buttons.js"></script>
</head>

<body>
    <h1>Add new user</h1>
    <section>
        <div class="container">
            <div class="col">
                <form method="POST" action="/admin/addNewUser">
                    <div class="row">
                        <h3 class="pr-1">First Name</h3>
                        <input type="text" class="text-left " name="addFirstname"></input>
                    </div>
                    <div class="row">
                        <h3 class="pr-1">Last Name</h3>
                        <input type="text" class="text-left ml-20" name="addLastname"></input>
                    </div>
                    <div class="row">
                        <h3>Postcode</h3>
                        <input type="text" name="addPostcode"></input>
                    </div>
                    <div class="row">
                        <h3>Address</h3>
                        <input type="text" name="addAddress"></input>
                    </div>
                    <div class="row">
                        <h3>Birthdate</h3>
                        <input type="date" name="editBirthdate"></input>
                    </div>
                    <div class="row">
                        <h3>Email</h3>
                        <input type="text" name="addEmail"></input>
                    </div>
                    <div class="row">
                        <h3>Password</h3>
                        <div class="col">
                            <input type="password" id="passwordInput" name="addPassword"></input>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-secondary" id="passwordToggleButton" onclick="passwordToggleButton()">
                                Show password
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <h3>Is Admin</h3>
                        <select name="addisAdmin">
                            <option>False</option>
                            <option>True</option>
                        </select>
                    </div>
                    <br>
                    <div class="row">
                        <button type="submit" class="btn btn-warning" id="addUserBtn" name="addUserBtn">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
</body>

</html>
<?php
include __DIR__ . '/../footer.php';
?>