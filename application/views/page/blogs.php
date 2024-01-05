<?php
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
?>

<div class="container">
    <h2 class="text-center my-5">All Blogs</h2>
    <div class="my-5 d-flex flex-wrap justify-content-center">

        <?php if(count($blog) > 0) {?>
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
        <?php } else{ ?>
            <h1>Data not Found</h1>
        <?php } ?>

        
    </div>
    <nav class="d-flex justify-content-center mt-5" aria-label="Page navigation example">
        <ul class="pagination">

            <li class="page-item <?= ($pageCount <= 1)?'disabled':''?> " ><a class="page-link" href="?page=<?= $query?($pageCount-1).'&query='.$query:($pageCount-1) ?>">Previous</a></li>
            <?php if(!($pageCount <= 1)){ ?>
            <?php }?>

            <?php for ($i=1; $i <= $total_page; $i++) { ?>
                    <li class='page-item'><a class='page-link <?= ($pageCount == $i)?'active':'' ?>' href='?page=<?= $query?$i.'&query='.$query:$i ?>'><?= $i ?></a></li>
            <?php } ?>
            
            <li class="page-item <?= !($total_page != $pageCount)?'disabled':''?>"><a class="page-link" href="?page=<?= $query?($pageCount+1).'&query='.$query:($pageCount+1) ?>">Next</a></li>
            <?php if($total_page != $pageCount){ ?>
            <?php } ?>
        </ul>
    </nav>
</div>