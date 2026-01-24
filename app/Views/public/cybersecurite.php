<div class="container">
    <section class="row float-left">
        <div class="">
            <h3>Epreuve E7 - Cybersécurité</h3>
            <p class="alert alert-warning"></p>
        </div>
    </section>
    <div class="row">
        <div class="col-md">            
            <h1 class="text-center mb-5" data-aos="flip-down" data-aos-duration="1200">Acutalité cybersécurité</h1>
            <h5 class="text-center mb-5" data-aos="flip-down" data-aos-duration="1200">Lemondeinformatique.fr</h5>

        
            <?php foreach ($feed1 as $news){        
                $desc = $news['desc'];
            /*$desc = preg_replace('/<br\s*\/?>/i', '<br>', $desc);
            // Supprime les 2 premiers <b>...</b> (le titre répété)
            $desc = preg_replace('/^.*?<br><br>/s', '', $desc, 1);*/
            ?>
            <div class="p-3 w-100 shadow mb-3 hvr-curl-top-right rounded" data-aos="fade-up" data-aos-duration="">
                <div class="text-justify">
                    <a href="<?= $news['link'] ?>" class="text-decoration-none text-black" target="_blank">
                        <div class="row col-md card-img-top mb-1">
                            <!-- <img src="<?= $news['image'] ?>" class="img-fluid col-md" alt="<?= $news['image'] ?>"> -->
                            <h5 class="col-md-11"><?= $news['title'] ?></h5>
                        </div>
                        <p class=" text-black"><?= $desc ?></p>
                    </a>
                    <small><?= $news['auteur'] ?: 'La rédaction de lemondeinformatique.fr'; ?></small><br>
                    <small class="bi bi-calendar-event me-2"></small>
                    <small class="text-dark gap-3 "><?= $news['date'] ?></small>
                </div>
            </div>
            
            <?php } ?>
            <small class="text">Source du flux RSS : <a href="https://www.lemondeinformatique.fr/flux-rss/thematique/securite/rss.xml" 
            target="_blank">lemondeinformatique.fr</a></small><br><br>
        </div>
            
            
        <div class="col-md">
            <h1 class="text-center mb-5" data-aos="flip-down" data-aos-duration="1200">Autres acutalités</h1>
            <h5 class="text-center mb-5" data-aos="flip-down" data-aos-duration="1200">cublic.fr</h5>
    
            <?php foreach ($feed2 as $news){        
                $desc = $news['desc'];
            ?>
            <div class="p-3 w-100 shadow mb-3 hvr-curl-top-right rounded" data-aos="fade-up" data-aos-duration="">
                <div class="text-justify">
                    <a href="<?= $news['link'] ?>" class="text-decoration-none text-black" target="_blank">
                        <div class="row card-img-top mb-1">
                            <img src="<?= $news['image'] ?>" class="img-fluid col-md w-50" alt="<?= $news['image'] ?>">
                            <h5 class="col-md"><?= $news['title'] ?></h5>
                        </div>
                        <p class=" text-black"><?= $desc ?></p>
                    </a>
                    <small class="bi bi-calendar-event me-2"></small>
                    <small class="text-dark gap-3 "><?= $news['date'] ?></small>
                </div>
            </div>
        
            <?php } ?>
            <small class="text">Source du flux RSS : <a href="https://www.clubic.com/feed/rss" 
            target="_blank">clubic.com</a></small><br><br>
        </div>
    </div>
</div>