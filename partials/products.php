<sections class="products">
    <div class="bg-dark text-white py-5 mb-4">
        <div class="container">
            <h2>Products List</h2>
        </div>
    </div>
    <div class="container mb-3">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <div class="text-center">
                            <img src="<?= $product->getImagePath(); ?>" alt="" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5><?= $product->getName(); ?></h5>
                            <div class="price">
                                <?= $product->getPrice(); ?>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <span><?= $product->getClassName() ?></span>
                            <span class="">
                                <span><?= $product->category->getName() ?></span>
                                <i class="<?= $product->category->getIcon() ?>"></i>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</sections>

<style>
    .card-img-top {
        height: 250px;
        width: fit-content;
    }
</style>