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

            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="/images<?='/' . $model[0]->getImage() ?>" alt="<?php $title ?>" class="img-thumbnail"
                            style="height: 100% ;">
                    </div>
                    <div class="col">
                    <form method="POST" action="/admin/updatemovie">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imageSelector" id="imageSelector">
                                <label for="imageSelector">Choose file</label>
                            </div>
                        </div>

                        <div class="row">
                            <input hidden type="text" class="text-center" name="editId"
                            value="<?php echo $model[0]->get_id(); ?>"></input> 
                            <input hidden type="text" class="text-center" name="editImage"
                            value="<?php echo $model[0]->getImage(); ?>"></input>
                        </div>
                        <div class="row">
                            <h3 class="pr-1">Title</h3>
                            <input type="text" class="text-center" name="editTitle"
                            value="<?php echo $model[0]->getTitle(); ?>"></input>
                        </div>
                        <div class="row">
                            <h3 class="pr-1">Description</h3>
                            <input type="text"class="text-left ml-20" name="editDescription"
                            value="<?php echo $model[0]->getDescription(); ?>"></input>
                        </div>
                        <div class="row">
                            <h3>Director</h3>
                            <input type="text"value="<?php echo $model[0]->getDirector(); ?>" name="editDirector"></input>
                        </div>
                        <div class="row">
                            <h3>Date Produced</h3>
                            <input type="date" value="<?php echo $model[0]->getDateProduced(); ?>"
                                name="editDateProduced"></input>
                        </div>
                        <div class="row">
                            <h3>Genre</h3>
                            <input type="text" value="<?php echo $model[0]->getGenre(); ?>" name="editGenre"></input>
                        </div>
                        <div class="row">
                            <h3>Rating</h3>
                            <input type="text"value="<?php echo $model[0]->getRating(); ?>" name="editRating"></input>
                        </div>
                        <div class="row">
                            <h3>Price</h3>
                            <input type="text"value="<?= $model[0]->getPrice() ?>" name="editPrice">
                        </div>
                        <br>
                       
                        <div class="row">
                                <button type="submit"  class="btn btn-warning" id="updateMovieBtn"name="updateMovieBtn">Update</button>
                        </div>
                        </form> 
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