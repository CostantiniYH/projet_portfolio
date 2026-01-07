<div class="container">
    
    <?php foreach ($feed as $news): ?>
        <?php 
        
            $desc = $news['desc'];
            $desc = preg_replace('/<br\s*\/?>/i', '<br>', $desc);
            // Supprime les 2 premiers <b>...</b> (le titre répété)
            $desc = preg_replace('/^.*?<br><br>/s', '', $desc, 1);
        ?>
        <div class=" p-3 shadow mb-3 hvr-curl-top-right rounded">
            <a href="<?= $news['link'] ?>" class="text-decoration-none">
                <div class="text-justify text-black">
                    <div class="row col-md card-img-top mb-1">
                        <img src="<?= $news['image'] ?>" class="img-fluid col-md" alt="<?= $news['image'] ?>">
                        <h5 class="col-md-11"><?= $news['title'] ?></h5>
                    </div>
                    <p class=" text-black"><?= $desc ?></p>
                    <small class="text-dark"><?= $news['date'] ?></small>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>