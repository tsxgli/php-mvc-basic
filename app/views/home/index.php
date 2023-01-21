<?php
include __DIR__ . '/../header.php';
?>


<body>
    <div class="card bg-primary text-white text-center mb-5" style="width: 100%;">
        <div class="card-body mb-5 mt-5">
            <h5 class="card-title  mt-5">WMovies</h5>
            <h1></h1>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <?php
                foreach ($model as $movie) {
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="/detail?id=<?php echo $movie->get_id(); ?>" style="display:inline-block; "">
                            <div class="mt-9 card" style="width: 100%; height: 100%;">
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
                                    <form action="/cart?id=<?php echo $movie->get_id(); ?>" method="POST">
                                        <button type="submit" class="btn btn-primary" name="buyMovieBtnHome">
                                            <?= $movie->getPrice() ?>
                                        </button>
                                    </form>
                                </span>
                            </div>
                    </div>
                    </a>
                </div>
            <?php
                }
                ?>
        </div>
        </div>
    </section>
</body>


<?php
include __DIR__ . '/../footer.php';
?>