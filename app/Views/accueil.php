<div class="container">
   <div class="card col-md-3">
        <div class="card-body">
            <button class="badge bg-success btn border-0 checked">12</button>
            <img class="card-img" src="<?= BASE_URL ?>uploads\image.png" alt="">
            <h2>Fruits</h2>
            <div class="card-title">
                <?= $apple->get_name(); ?>
                <div class="card-text"><p class="">
                    <?=
                        $apple->get_forme() . '</br>' . $apple->get_color();
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>