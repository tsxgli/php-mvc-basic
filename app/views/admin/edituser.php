<?php
include __DIR__ . '/../header.php';
?>

<body>
    <h1>Edit User</h1>
    <section>
        <div class="container">
            <div class="col">
                <form class="was-validated"method="POST" action="/admin/updateUser" onsubmit="return validateForm()">
                    <div class="row">
                        <input hidden type="text" class="text-center" name="editId"
                            value="<?php echo $model[0]->get_id(); ?>"></input>
                    </div>
                    <div class="form-group">
                        <label for="editFirstname">First Name</label>
                        <input type="text" class="form-control" name="editFirstname"
                            value="<?php echo $model[0]->getFirstName(); ?>" required>
                        <div class="invalid-feedback">Please enter a first name.</div>
                    </div>
                    <div class="form-group">
                        <label for="editLastname">Last Name</label>
                        <input type="text" class="form-control" name="editLastname"
                            value="<?php echo $model[0]->getLastName(); ?>" required>
                        <div class="invalid-feedback">Please enter a last name.</div>
                    </div>
                    <div class="form-group">
                        <label for="editPostcode">Postcode</label>
                        <input type="text" class="form-control" value="<?php echo $model[0]->getPostCode(); ?>"
                            name="editPostcode"
                            pattern="^[0-9]{4}[A-Za-z]{2}$"required>
                        <div class="invalid-feedback">Please enter a valid postcode.</div>
                    </div>
                    <div class="form-group">
                        <label for="editAddress">Address</label>
                        <input type="text" class="form-control" value="<?php echo $model[0]->getAddress(); ?>"
                            name="editAddress" pattern="[a-zA-Z]+ [0-9]{1,4}" required>
                        <div class="invalid-feedback">Please enter a valid address.</div>
                    </div>
                    <div class="form-group">
                        <label for="editBirthdate">Birthdate</label>
                        <input type="date" class="form-control" value="<?php echo $model[0]->getBirthdate(); ?>"
                            name="editBirthdate" required>
                        <div class="invalid-feedback">Please enter a birthdate.</div>
                    </div>
                    <div class="form-group">
                        <label for="editEmail">Email</label>
                        <input type="email" class="form-control" value="<?php echo $model[0]->getEmail(); ?>"
                            name="editEmail" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$">
                        <div class="invalid-feedback">Please enter a valid email.</div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="isAdmin">Is Admin</label>
                            <select class="form-control" id="isAdmin" name="isAdmin" required>
                                <option value="false" <?= $model[0]->getIsAdmin() == "0" ? 'selected' : '' ?>>False
                                </option>
                                <option value="true" <?= $model[0]->getIsAdmin() == "1" ? 'selected' : '' ?>>True</option>
                            </select>
                        </div>
                 
                        <div class="form-group">
                        <br><button type="submit" class="btn btn-warning" id="updateUserBtn"
                                name="updateUserBtn">Update</button>
                        </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </section>
    <?php
    include __DIR__ . '/../footer.php';
    ?>