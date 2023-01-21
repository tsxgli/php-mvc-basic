<?php
include __DIR__ . '/../header.php';
?>

<body>
    <section>
        <h1>Edit Movie</h1>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="/images<?='/' . $model[0]->getImage() ?>" alt="<?php $title ?>" class="img-thumbnail"
                        style="height: 100% ;">
                </div>
                <div class="col-12 col-md-6">
                <form class="was-validated" method="POST" action="/admin/updatemovie" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="imageSelector">Choose file</label>
                            <input type="file" class="form-control-file" name="imageSelector" id="imageSelector">
                        </div>
                        <div class="form-group">
                            <input hidden type="text" name="editId" value="<?php echo $model[0]->get_id(); ?>">
                            <input hidden type="text" name="editImage" value="<?php echo $model[0]->getImage(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="editTitle">Title</label>
                            <input type="text" class="form-control" id="editTitle" name="editTitle" required
                                value="<?php echo $model[0]->getTitle(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="editDescription">Description</label>
                            <input type="text" class="form-control" id="editDescription" name="editDescription" required
                                value="<?php echo $model[0]->getDescription(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="editDirector">Director</label>
                            <input type="text" class="form-control" id="editDirector" name="editDirector" required
                                value="<?php echo $model[0]->getDirector(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="editDateProduced">Date Produced</label>
                            <input type="date" class="form-control" id="editDateProduced" name="editDateProduced"
                                required value="<?php echo $model[0]->getDateProduced(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="editGenre">Genre</label>
                            <input type="text" class="form-control" id="editGenre" name="editGenre" required></input>
                        </div>
                        <div class="form-group">
                        <label for="editRating">Rating</label>
                            <input type="text" class="form-control" value="<?php echo $model[0]->getRating(); ?>"
                                name="editRating" required pattern="[1-9]|10(\.\d{1,2})?">
                            <div class="invalid-feedback">Please enter a valid rating (0-10).</div>
                        </div>
                        <div class="form-group">
                        <label for="editPrice">Price</label>
                            <input type="text" class="form-control" value="<?= $model[0]->getPrice() ?>"
                                name="editPrice" required  pattern="[1-9]|10(\.\d{1,2})?"   >
                            <div class="invalid-feedback">Please enter a valid price.</div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning" id="updateMovieBtn"
                                name="updateMovieBtn">Update</button>
                        </div>

                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>

    </section>

    <?php
    include __DIR__ . '/../footer.php';
    ?>