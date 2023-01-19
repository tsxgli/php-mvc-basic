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
    <title>Edit Message</title>
</head>

<body>
    <form action="/admin/addUser" method="POST">
    <h3>Add new User</h3>
    <button  type="submit" name="addUser" class="btn btn-primary">Add user </button><br><br>
    </form>


<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($model as $user) {
    ?>
    <tr>
      <td><?php echo $user->getFirstName(); ?></td>
      <td><?php echo $user->getLastName(); ?></td>
      <td><?php echo $user->getEmail(); ?></td>
      <td>
        <div class="row">
            <div class="col">
            <form action="/admin/editUser?id=<?php echo $user->get_id();?>" method="post">
          <input type="hidden" name="user_id" value="<?php echo $user->get_id(); ?>">
          <input type="submit" name="edit_user" value="Edit" class="btn btn-primary">
        </form>
            </div>
        <div class="col">
        <form action="/admin/deleteUser?id=<?php echo $user->get_id();?>" method="post">
          <input type="hidden" name="user_id" value="<?php echo $user->get_id(); ?>">
          <input type="submit" data-id="<?php echo $movie->get_id();?>" name="delete_user" value="Delete" class="btn btn-danger">
        </form>
        </div>
       
        </div>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
include __DIR__ . '/../footer.php';
?>



