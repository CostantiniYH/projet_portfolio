<div class="container">
    <div class="row">
        <?php foreach ($etudiants as $etudiant): ?>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                <?php require __DIR__ . '/../components/card_user.php'; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="row"></div>

</div>