<div class="container">
    <h2>Fruits</h2>
    <div class="row g-3">
    <?php foreach ($fruits as $fruit): ?>
            <div class="col-md-4" >
                <div class="card shadow-sm" data-aos="flip-right" data-aos-duration="1000">
                    <div class="card-body">
                        <?php if ($fruit->get_quantite() > 0) {
                            $bg = "bg-success";
                        } else {
                            $bg = "bg-danger";
                        }?>
                        <button class="badge <?= $bg ?> btn border-0 position-absolute checked"><?= $fruit->get_quantite(); ?></button>
                        <img usemap="#usermap" class="shadow-sm card-img" style="height:200px;" src="<?= BASE_URL . $fruit->get_image();?>" alt="">
                        <h5 class="card-title">
                            <?= $fruit->get_name(); ?>
                        </h5>
                        <p class="card-text" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="1000">
                            La <?= $fruit->get_name(); ?> est un fruit de forme
                            <?=
                                $fruit->get_forme() ?> et de couleur <?= $fruit->get_color();
                            ?>
                        </p>
                        <a href="<?= $fruit->get_link(); ?>" class="" target="_blank" data-aos="slide-down" data-aos-duration="1000" data-aos-delay="2000">En savoir plus</a>
                    </div>
                </div>
                <map name="usermap">
                    <area shape="rect" coords="34,44,270,350" alt="Computer" href="<?= $fruit->get_link(); ?>">
                </map>
            </div>
            <?php endforeach; ?>
        </div>
</div>