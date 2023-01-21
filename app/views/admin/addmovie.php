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
        <h1>Add Movie</h1>
        <form method="POST" action="/admin/addNewMovie" enctype="multipart/form-data" id="addMovieForm">
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
                        <button type="submit" class="btn btn-warning" id="addMovieBtn" name="addMovieBtn">Add movie</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    </section>

</body>

</html>
<?php
include __DIR__ . '/../footer.php';
?>