<p><a class="text-dark" href="<?= BASE_URL ?>">Accueil</a> / Expertises</p>
<h1 class="text-center">Mes Expertises</h1></br>
<div class="card" >
    <h5 class="card-header">Aperçu des compétences et domaines d'expertise dans le développement web :</h5>
    <div class="card-body">
        <ul class="list-group">
            <?php foreach ($expertises as $expertise): ?>
                <li class="list-group-item border rounded mb-1 list-group-item-action">
                    <a href="<?= BASE_URL ?>projets?=id=" class="text-decoration-none text-dark">
                        <strong><?= htmlspecialchars($expertise['title'], ENT_QUOTES, 'UTF-8') ?></strong> 
                    - <?= htmlspecialchars($expertise['desc'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>