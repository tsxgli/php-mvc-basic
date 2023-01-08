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
    <section>
        <div class="container">
            
            <div class="row">
                <div class="col">
                    <img src="/images<?='/'. $model[0]->getImage()?>" alt="<?php $title?>" class="img-thumbnail"
                        style="height: 100% ;">
                </div>
                <div class="col">
                    
                </div>
                <div class="row">
                <h3 class="pr-1">Title</h3>
                    <input class="text-center" value="<?php echo $model[0]->getTitle();?>"></input>
                </div>
                <div class="row">
                    <h3 class="pr-1">Description</h3>
                    <input class="text-left ml-20" value="<?php echo $model[0]->getDescription();?>"></input>
                    <div class="row">
                        <h3>Director</h3>
                        <input value="<?php echo $model[0]->getDirector();?>"></input>
                    </div>
                    <div class="row">
                        <h3>Date Produced</h3>
                        <input value="<?php echo $model[0]->getDateProduced();?>"></input>
                    </div>
                    <div class="row">
                        <h3>Genre</h3>
                        <input value="<?php echo $model[0]->getGenre();?>"></input>
                    </div>
                    <div class="row">
                        <h3>Rating</h3>
                        <input value="<?php echo $model[0]->getRating();?>"></input>
                    </div>
                    <div class="row">
                        <h3>Price</h3>
                        <input value=" <?= $model[0]->getPrice()?>">
                    </div>
                    <div class="row">
                        <form action="/cart?id=<?php echo $model[0]->get_id();?>" method="POST">
                            <button type="submit" class="btn btn-warning" name="buyMovieBtn">
                               Update</button>
                        </form>
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