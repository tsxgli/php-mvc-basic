<?php
include __DIR__ . '/../header.php';
?>

<body>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Top Movies</h1>
                <hr>
                <ol id="moviesList" class="list-group"></ol>
            </div>
        </div>
    </div>
    <script>
        showTopMovies() 
    </script>

<?php
include __DIR__ . '/../footer.php';
?>