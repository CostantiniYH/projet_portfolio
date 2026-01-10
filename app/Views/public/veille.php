<div class="container">
    <h1 class="text-center mb-5" data-aos="flip-down" data-aos-duration="1200">Acutalité à la une</h1>
    
    <?php foreach ($feed as $news){        
        $desc = $news['desc'];
        $desc = preg_replace('/<br\s*\/?>/i', '<br>', $desc);
        // Supprime les 2 premiers <b>...</b> (le titre répété)
        $desc = preg_replace('/^.*?<br><br>/s', '', $desc, 1);
    ?>
        <div class="p-3 shadow mb-3 hvr-curl-top-right rounded" data-aos="fade-up" data-aos-duration="">
            <a href="<?= $news['link'] ?>" class="text-decoration-none" target="_blank">
                <div class="text-justify text-black">
                    <div class="row col-md card-img-top mb-1">
                        <img src="<?= $news['image'] ?>" class="img-fluid col-md" alt="<?= $news['image'] ?>">
                        <h5 class="col-md-11"><?= $news['title'] ?></h5>
                    </div>
                    <p class=" text-black"><?= $desc ?></p>
                    <small class="bi bi-calendar-event me-2"></small>
                    <small class="text-dark gap-3 "><?= $news['date'] ?></small>
                </div>
            </a>
        </div>

    <?php } ?>
    <small class="text">Source du flux RSS : <a href="https://www.developpez.com/index/rss" target="_blank">developpez.com</a></small><br><br>
</div>