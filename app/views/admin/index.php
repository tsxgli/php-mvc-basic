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
    <title>Document</title>
</head>
<body>
    <h1>Admin settings</h1>
    <div class="row">
        <div class="col">
        <a class="btn btn-outline-primary" href="/admin/viewOrders">View Order history</a>
        <a class="btn btn-outline-primary" href="/admin/managemovies">Manage movies</a>
        <a class="btn btn-outline-primary" href="/admin/manageusers">Manage users</a>
        </div>

    </div>



</body>
</html>
<?php
include __DIR__ . '/../footer.php';
?>