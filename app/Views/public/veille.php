<?php

foreach ($feed as $news): ?>
<div class="container">
    <div class="card" style="width: ;">
        <img src="<?= $news['image'] ?>" class="card-img" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $news['id'] + 1 . "-" . $news['title'] ?></h5>
            <p class="card-text"><?= $news['desc'] ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<?php endforeach ?>