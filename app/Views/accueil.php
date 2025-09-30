<div class="container">
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