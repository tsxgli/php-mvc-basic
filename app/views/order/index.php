<?php
include __DIR__ . '/../header.php';
?>


<body>

    <section class="h-100 h-custom" style="background-color: #00C0DB;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>

                                        </div>
                                        <hr class="my-4">

                                        <form action="/buyMovie" method="POST">
                                            <?php
                                            foreach ($_SESSION['cartItems'] as $movie) {

                                                ?>
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="/images<?='/' . $movie->getImage() ?>"
                                                            alt="<?php $movie->getTitle() ?>" class="img-fluid "
                                                            style="height: 100%;">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-muted">Movie</h6>
                                                        <h6 class="text-black mb-0">
                                                            <?= $movie->getTitle() ?>
                                                        </h6>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="text-muted">Price</h6>
                                                        <h6 class="text-black mb-0">
                                                            <?= $movie->getPrice() ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                            <?php
                                            }

                                            ?>

                                            <div class="pt-5">
                                                <h6 class="mb-0"><a href="/movies" class="text-body"><i
                                                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                                </h6>
                                            </div>
                                    </div>
                                </div>





                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                        <hr class="my-4">

                                        <h5 class="text-uppercase mb-3">Delivery</h5>
                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" name="checkoutEmail" id="checkoutEmailInput"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="checkoutEmailInput">Enter your
                                                    email</label>
                                            </div>
                                        </div>
                                        <div class="mb-4 pb-2">
                                            <label class="form-label" for="checkoutEmailInput">Choose payment
                                                method</label>
                                            <select class="select">
                                                <option value="1">Credit Card</option>
                                                <option value="2">IDEAL</option>
                                                <option value="3">Debit Card</option>
                                            </select>
                                        </div>


                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between mb-5">
                                            <label class="form-label" for="checkoutEmailInput">Total price
                                            </label>
                                            <h5 class="text-uppercase">
                                                <?= $movie->getPrice() ?>
                                            </h5>
                                            <h5></h5>
                                        </div>

                                        <a name="payBtn" class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark">Pay</a>

                                        <input type="hidden" name="movieId" value="<?= $movie->get_id() ?>">
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include __DIR__ . '/../footer.php';
    ?>