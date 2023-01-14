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
    <title>Edit Message</title>
</head>

<body>
    <form method="POST">


    <div class="container my-5">
        <h2>Edit Post</h2>
        <form method="GET">
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <label for="id">ID</label><br>
                    <input type="text" id="id" name="id" value="<?php echo "name"?>"><br>
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <label class="col-sm-3 col-form-label">Message</label><br>
                    <input type="text" id="id" name="id" value="<?php echo "wjaht"?>"><br>
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <label for="birthdate">Date Posted</label><br>
                    <input type="text" id="birthdate" name="birthdate" value="<?php echo "22-22-22"?>"><br>
                </div>
            </div>

 <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary" > Submit</button><br>
                </div>
                <div class="col-sm-3 ">
                    <a class="btn btn-outline-primary" href="management.php">Cancel</a>
                </div>
            </div>

        </form>
    </div>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
include __DIR__ . '/../footer.php';
?>