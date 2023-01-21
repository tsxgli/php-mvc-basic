<?php
include __DIR__ . '/../header.php';
?>

<body>
    <section>
        <div class="container">
            <h1 class="text-capitalize"><?= $_SESSION['genre']?> movies</h1>
            <div class="row">
            <?php
                foreach ($model as $movie) {
                    $_SESSION['movie'] = $movie;
                    ?>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="/detail?id=<?php echo $movie->get_id();?>" ">
                    <div class=" card" style="width: 100%; height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $movie->getTitle() ?></h5>
                            <div class="card-body">
                                <img src="/images<?='/'. $movie->getImage()?>" alt="<?php $movie->getTitle()?>"
                                    class="img-fluid " style="height: 100%;">
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="float-start">
                                <button type="submit" class="btn btn-primary"> <?= $movie->getPrice()?></button>
                        </div>
                </div>
                 </a>
            </div>
            <?php
                }
                ?>
        </div>
    </section>
<?php
include __DIR__ . '/../footer.php';
?>