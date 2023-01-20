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
    <form action="/admin/addMovie" method="POST">
        <h3>Add new movie</h3>
        <button type="submit" name="addUser" class="btn btn-primary">Add Movie </button><br><br>
    </form>

    <section>
        <div class="container">
            <div id="containerRow"class="row">
                <?php

                foreach ($model as $movie) {
                    ?>
                <div class="col-3">
                    <a href="/detail?id=<?php echo $movie->get_id(); ?>" style="display:inline-block; "">
                                    <div class=" card" style="width: 100%; height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $movie->getTitle() ?>
                            </h5>
                            <div class="card-body">
                                <img src="/images<?='/' . $movie->getImage() ?>" alt="<?php $movie->getTitle() ?>"
                                    class="img-fluid ">
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="float-start">
                                <form method="POST">
                                    <a type="submit" class="btn btn-primary" name="editMovieBtn"
                                        href="/admin/editMovie?id=<?php echo $movie->get_id(); ?>">
                                        Edit</a>
                                    <a type="submit" class="btn btn-danger" data-id="<?php echo $movie->get_id(); ?>"
                                        id="deleteBtn" name="deleteMovieBtn">Delete</a>
                                </form>

                        </div>
                </div>
                </a>
            </div>
            <?php
                }
                ?>
        </div>
    </section>
    <script src="/javascript/moviemanagement.js">
    </script>
    <?php
    include __DIR__ . '/../footer.php';
    ?>