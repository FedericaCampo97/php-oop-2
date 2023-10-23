<?php
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toy.php';
require __DIR__ . '/Models/House.php';
require __DIR__ . '/db.php';

include __DIR__ . '/layout/head.php';

?>

<main>

    <div class="bg-main">
        <div class="container pt-5">
            <h1 class="display-5 fw-bold text-white">Welcome to the four-legged word!</h1>

            <p class="col-md-8 fs-4 mt-4 text-white">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <a href="./products.php" class="btn btn-primary btn-lg btn_shop" type="button">VAI ALLO SHOP</a>
        </div>
    </div>


</main>

<?php

include __DIR__ . '/layout/footer.php';

?>

<style>
    .bg-main {
        height: 80vh;
        background-image: url("//www.atuttazampa.it/wp-content/uploads/2019/02/Post-Convivenza-cane-gatto.jpg");
        background-size: cover;
    }

    .btn_shop {
        margin-top: 400px;
    }
</style>