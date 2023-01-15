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
    <title></title>
</head>

<body>
    <h1>Edit User</h1>
    <section>
        <div class="container">
            <div class="col">
                <form method="POST" action="/admin/updateUser">
                    <div class="row">
                        <input hidden type="text" class="text-center" name="editId"
                            value="<?php echo $model[0]->get_id(); ?>"></input>
                    </div>
                    <div class="row">
                        <h3 class="pr-1">First Name</h3>
                        <input type="text" class="text-left " name="editFirstname"
                            value="<?php echo $model[0]->getFirstName(); ?>"></input>
                    </div>
                    <div class="row">
                        <h3 class="pr-1">Last Name</h3>
                        <input type="text" class="text-left ml-20" name="editLastname"
                            value="<?php echo $model[0]->getLastName(); ?>"></input>
                    </div>
                    <div class="row">
                        <h3>Postcode</h3>
                        <input type="text" value="<?php echo $model[0]->getPostCode(); ?>" name="editPostcode"></input>
                    </div>
                    <div class="row">
                        <h3>Address</h3>
                        <input type="text" value="<?php echo $model[0]->getAddress(); ?>" name="editAddress"></input>
                    </div>
                    <div class="row">
                        <h3>Genre</h3>
                        <input type="date" value="<?php echo $model[0]->getBirthdate(); ?>"
                            name="editBirthdate"></input>
                    </div>
                    <div class="row">
                        <h3>Email</h3>
                        <input type="text" value="<?php echo $model[0]->getEmail(); ?>" name="editEmail"></input>
                    </div>
                    <div class="row">
                        <h3>Is Admin</h3>
                        <select name="isAdmin">
                            <option value="False" <?= $model[0]->getIsAdmin() == "0" ? 'selected' : '' ?>>False</option>
                            <option value="True" <?= $model[0]->getIsAdmin() == "1" ? 'selected' : '' ?>>True</option>
                        </select>
                    </div>
                    <br>

                    <div class="row">
                        <button type="submit" class="btn btn-warning" id="updateUserBtn"
                            name="updateUserBtn">Update</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>


    </section>

</body>

</html>
<?php
include __DIR__ . '/../footer.php';
?>