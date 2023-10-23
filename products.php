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
    <?php include __DIR__ . '/partials/products.php';  ?>
</main>

<?php

include __DIR__ . '/layout/footer.php';
