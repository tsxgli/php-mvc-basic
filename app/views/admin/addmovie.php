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
        <form method="POST" action="/admin/addNewMovie" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                 
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="addImage" name="addImage">

                            </div>
                        </div>
                    <div class="row">
                        <h3 class="pr-1">Title</h3>
                        <input type="text" class="text-center" name="addTitle"></input>
                    </div>
                    <div class="row">
                        <h3 class="pr-1">Description</h3>
                        <input type="text" class="text-left ml-20" name="addDescription"></input>
                    </div>
                    <div class="row">
                        <h3>Director</h3>
                        <input type="text" name="addDirector"></input>
                    </div>
                    <div class="row">
                        <h3>Date Produced</h3>
                        <input type="date" name="addDateProduced"></input>
                    </div>
                    <div class="row">
                        <h3>Genre</h3>
                        <input type="text" name="addGenre"></input>
                    </div>
                    <div class="row">
                        <h3>Rating</h3>
                        <input type="text" name="addRating"></input>
                    </div>
                    <div class="row">
                        <h3>Price</h3>
                        <input type="text" name="addPrice">
                    </div>
                    <br>

                    <div class="row">
                        <button type="submit" class="btn btn-warning" id="addMovieBtn" name="addMovieBtn">Add</button>
                    </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
        </form>
    </section>

</body>

</html>
<?php
include __DIR__ . '/../footer.php';
?>