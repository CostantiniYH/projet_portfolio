<div class="container">
    <h1 class="text-center" data-aos="fade-down" data-aos-duration="1000">Bienvenue sur YHC Portfolio</h1> 
    <ul class="list-group">
        <?php foreach ($projets as $projet): ?>
            <li class="list-group-item border rounded mb-1 list-group-item-action" data-aos="fade-up" data-aos-duration="1000">
                <strong><?= htmlspecialchars($projet['title'], ENT_QUOTES, 'UTF-8') ?></strong> 
                - <?= htmlspecialchars($projet['desc'], ENT_QUOTES, 'UTF-8') ?>
            </li>
        <?php endforeach ?>
    </ul>    
    <div class="card col-md-3">
        <div class="card-body">
            <button class="badge bg-success btn border-0 checked">12</button>
            <img class="card-img" src="<?= BASE_URL ?>uploads\image.png" alt="">
            <h2>Fruits</h2>
            <div class="card-title">
                <?= $apple->get_name(); ?>
                <div class="card-text">
                    <?=
                        $apple->get_form() . '</br>' . $apple->get_color();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>