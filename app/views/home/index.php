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
    <section>
        <div class="container">
            <div class="row">
                <?php
                foreach ($model as $movie) {
                    ?>
                <div class="col-2">
                    <div class="card">
                        <div class="card-body" style="height: 16rem;">
                            <p> <?= $movie->getTitle() ?></p>
                            <img src="/images<?='/'. $movie->getImage()?>" alt="<?php $movie->getTitle()?>" class="img-fluid rounded-start" >
                        </div>
                        <div class="card-footer bg-light">
                            <span class="float-start">
                                <button class="float-end"> Book</button>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
    </section>
</body>

</html>
<?php
include __DIR__ . '/../footer.php';
?>