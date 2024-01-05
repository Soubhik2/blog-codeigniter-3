<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

<?php
    // echo $params;
?>

<h1 class="my-5 text-center"><?= $data->title ?></h1>

<div class="d-flex justify-content-center my-5">
    <img style="width: 70%; height: 60vh;" src="<?= base_url($data->img) ?>" alt="">
</div>

<div class="container my-5">
    <h5><?= $data->descr ?></h5>
</div>

<?php
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
?>