<?php
include __DIR__ . '/../header.php';
?>

<body>
    <section>
        <h1>Add Movie</h1>
        <form  method="POST" action="/admin/addNewMovie" enctype="multipart/form-data" id="addMovieForm">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="addImage">Image</label>
                        <input type="file" class="form-control-file" id="addImage" name="addImage" required>
                    </div>
                    <div class="form-group">
                        <label for="addTitle">Title</label>
                        <input type="text" class="form-control" id="addTitle" name="addTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="addDescription">Description</label>
                        <input type="text" class="form-control" id="addDescription" name="addDescription" required>
                    </div>
                    <div class="form-group">
                        <label for="addDirector">Director</label>
                        <input type="text" class="form-control" id="addDirector" name="addDirector" required>
                    </div>
                    <div class="form-group">
                        <label for="addDateProduced">Date Produced</label>
                        <input type="date" class="form-control" id="addDateProduced" name="addDateProduced" required>
                    </div>
                    <div class="form-group">
                        <label for="addGenre">Genre</label>
                        <input type="text" class="form-control" id="addGenre" name="addGenre" required>
                    </div>
                    <div class="form-group">
                        <label for="addRating">Rating</label>
                        <input type="text" class="form-control" id="addRating" name="addRating" required>
                    </div>
                    <div class="form-group">
                        <label for="addPrice">Price</label>
                        <input type="text" class="form-control" id="addPrice" name="addPrice" required>
                    </div>
                    <div class="form-group">
                        <br><button type="submit" class="btn btn-warning" id="addMovieBtn" name="addMovieBtn">Add movie</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    </section>

<?php
include __DIR__ . '/../footer.php';
?>