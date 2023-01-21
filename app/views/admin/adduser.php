<?php
include __DIR__ . '/../header.php';
?>

<h1>Add new user</h1>
<section>
    <div class="container">
        <div class="col">
            <form class="was-validated" method="POST" action="/admin/addNewUser">
                <div class="container">
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="addFirstname">First Name</label>
                            <input type="text" class="form-control" id="addFirstname" name="addFirstname" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="addLastname">Last Name</label>
                            <input type="text" class="form-control" id="addLastname" name="addLastname" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="addPostcode">Postcode</label>
                            <input type="text" class="form-control" id="addPostcode" name="addPostcode"  pattern="^[0-9]{4}[A-Za-z]{2}$"required>
                        <div class="invalid-feedback">Please enter a valid postcode.</div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="addAddress">Address</label>
                            <input type="text" class="form-control" id="addAddress" name="addAddress" pattern="[a-zA-Z]+ [0-9]{1,4}" required>
                        <div class="invalid-feedback">Please enter a valid address.</div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="addBirthdate">Birthdate</label>
                            <input type="date" class="form-control" id="addBirthdate" name="addBirthdate" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="addEmail">Email</label>
                            <input type="text" class="form-control" id="addEmail" name="addEmail" required
                                pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$">
                            <div class="invalid-feedback">Please enter a valid email.</div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="addPassword">Password</label>
                                <input type="password" class="form-control" id="addPassword" name="addPassword"
                                    required>
                                <button type="button" class="btn btn-secondary" id="passwordToggleButton"
                                    onclick="passwordToggleButton()">
                                    Show password
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="addisAdmin">Is Admin</label>
                                <select class="form-control" id="addisAdmin" name="addisAdmin" required>
                                    <option value="false">False</option>
                                    <option>True</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <br><br> <button type="submit" class="btn btn-warning" id="addUserBtn"
                                    name="addUserBtn">Add User</button>
                            </div>
            </form>
        </div>
    </div>
</section>
<script>
    document.getElementById('passwordToggleButton').addEventListener('click',
        function () {
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

<?php
include __DIR__ . '/../footer.php';
?>