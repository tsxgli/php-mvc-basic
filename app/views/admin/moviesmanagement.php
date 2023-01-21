<?php
    include __DIR__ . '/../header.php';
    ?>
<body>
    <form action="/admin/addMovie" method="POST">
        <h3>Add new movie</h3>
        <button type="submit" name="addUser" class="btn btn-primary">Add Movie </button><br><br>
    </form>

    <section>
        <div class="container">
            <div id="containerRow" class="row">
                <?php

                foreach ($model as $movie) {
                    ?>
                <div class="col-md-3 col-sm-6"> <!-- use Bootstrap's grid system to adjust the number of columns per row on different screen sizes -->
                    <a href="/detail?id=<?php echo $movie->get_id(); ?>" style="display:inline-block;">
                        <div class="card" style="width: 100%; height: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $movie->getTitle() ?>
                                </h5>
                                <div class="card-body">
                                    <img src="/images<?='/' . $movie->getImage() ?>" alt="<?php $movie->getTitle() ?>"
                                        class="img-fluid">
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
        </div>
    </section>
    <script src="/javascript/moviemanagement.js"></script>
    <?php
    include __DIR__ . '/../footer.php';
    ?>
</body>
