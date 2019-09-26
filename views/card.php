<div class="container">
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
    <?php include 'comment_layout.php'?>   
    </footer>
</section>
</div>