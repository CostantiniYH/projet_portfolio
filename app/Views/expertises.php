<div class="card">
    <div class="card-body">
        <h1 class="text-center" data-aos="fade-up" data-aos-duration="1000">Mes Expertises</h1> 
        <p class="text-center" data-aos="fade-up" data-aos-duration="1000">Voici un aperçu de mes compétences et domaines d'expertise dans le développement web :</p>
        <ul class="list-group">
            <?php foreach ($expertises as $expertise): ?>
                <li class="list-group-item border rounded mb-1 list-group-item-action" data-aos="fade-up" data-aos-duration="1000">
                    <a href="<?= BASE_URL ?>projets?=id=" class="text-decoration-none text-dark">
                        <strong><?= htmlspecialchars($expertise['title'], ENT_QUOTES, 'UTF-8') ?></strong> 
                    - <?= htmlspecialchars($expertise['desc'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>