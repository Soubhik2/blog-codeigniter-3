<div class="container my-5" style="height: calc(100vh - 249px);">

    <?php if($alert->display){ ?>
        <div class="alert alert-<?=$alert->type?> alert-dismissible fade show" role="alert">
            <strong><?= $alert->title ?></strong> <?= $alert->subTitle ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <h1 class="my-4">Post Your Blog</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="img" class="form-label">Blog Image Upload</label>
            <input class="form-control" type="file" id="img" name="img">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Blog Description</label>
            <textarea class="form-control" id="desc" name="desc" rows="10"></textarea>
        </div>

        <button type="submit" name="submit" value="1" class="btn btn-primary">Submit</button>
    </form>
    <!-- <img src="<?= base_url('public/blogs/blog1.jpeg') ?>" alt=""> -->
</div>