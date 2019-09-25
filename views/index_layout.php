<?php include 'head.php'?>
  <?php include 'nav.php'?>
   
        <?php foreach ($result as $row): ?>
        <section class="card mt-4">
                <header class="card-header d-flex align-items-center bg-dark">
                    <h5 class="card-title pl-4 mb-0 text-light">
                     <img class="rounded-circle" src="img/DragonRed.jpg" alt="Dragon" style="width: 40px;" height="40px;">
                        <?= $row['name'] ?>
                        <small>
                        <p>Created at: <?= $row['created_at'] ?> </p>
                        <p>Updated at: <?= $row['updated_at'] ?> </p>
                        </small>
                    </h5>
                </header>
                
                <div class="card-body">
                    <p class="card-text">
                    <?= $row['body'] ?> 
                    </p>
                </div>
                <footer class="card-footer">
                <a href="tweet.php?id=<?= $row['id'] ?>"> <class="card-link">Show thread</a>
                     
                </footer>
            </section>
        <?php endforeach ?>
    
    </div>
<!-- 
    Lägga in bootstrap
    css och js
    copy paste in ett kort
    redigera det för ett tweet
    testa att göra flera kort
-->
<?php include 'foot.php'?>