<?php include 'head.php'?> 
    <?php include 'nav.php'?>
<section class="card mt-4">
    <header class="card-header d-flex align-items-center bg-dark">
        <h5 class="card-title pl-4 mb-0 text-light">
        <img class="rounded-circle" src="img/DragonRed.jpg" alt="Dragon" style="width: 40px;" height="40px;">
            <?= $result['name'] ?>
            <small>
            <p>Created at: <?= $result['created_at'] ?> </p>
            <p>Updated at: <?= $result['updated_at'] ?> </p>
            </small>
        </h5>
    </header>
    <div class="card-body">
        <p class="card-text">
        <?= $result['body'] ?> 
        </p>
    </div>
    <footer class="card-footer">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Type here" aria-label="Type here" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Add comment</span>
                
            </div>
        </div>
        <i class="material-icons"> favorite_border</i>
    </footer>
</section>
        
<?php include 'foot.php'?>