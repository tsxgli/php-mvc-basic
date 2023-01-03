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
    <title>Detail page</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <h1 class="text-center"><?php echo $model[0]->getTitle();?></h1>
                <div class="col">
                    <img src="/images<?='/'. $model[0]->getImage()?>" alt="<?php $title?>" class="img-thumbnail"
                        style="height: 100% ;">
                </div>
                <div class="col">
                    <h3 class="pr-1">Description</h3>
                    <p class="text-left ml-20"><?php echo $model[0]->getDescription();?></p>
                    <div class="row">
                        <h3>Director</h3>
                        <p><?php echo $model[0]->getDirector();?></p>
                    </div>
                    <div class="row">
                        <h3>Date Produced</h3>
                        <p><?php echo $model[0]->getDateProduced();?></p>
                    </div>
                    <div class="row">
                        <h3>Genre</h3>
                        <p><?php echo $model[0]->getGenre();?></p>
                    </div>
                    <div class="row">
                        <h3>Rating</h3>
                        <p><?php echo $model[0]->getRating();?></p>
                    </div>
                    <div class="row">
                        <h3>Price</h3>
                        <div class="col"> <button class="btn btn-warning" type="submit" name="buyMovieBtn" ><?php echo $model[0]->getPrice();?></button></div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>

</body>

</html>
<?php
include __DIR__ . '/../footer.php';
?>