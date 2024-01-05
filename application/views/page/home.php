<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

<div class="px-4 py-5 my-5 text-center">
    <i class="bi bi-shop" style="font-size: 72px;"></i>
    <h1 class="display-5 fw-bold text-body-emphasis">WordWeave Blog</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
            popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
            extensive prebuilt components, and powerful JavaScript plugins.
        </p>
    </div>
</div>

<div class="container">
    <h2 class="text-center">New Blogs</h2>
    <div class="my-5 d-flex flex-wrap justify-content-center">

        <?php foreach ($blog as $key => $value) {?>
            <div class="card m-2" style="width: 26rem;">
                <img src="<?= base_url($value->img) ?>" style="height: 250px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $value->title ?></h5>
                    <p class="card-text"><?= substr($value->descr,0, 100) ?></p>
                    <a href="<?= base_url("/blog/$value->id") ?>" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<?php
    // echo '<pre>';
    // print_r($blog);
    // echo '</pre>';
?>