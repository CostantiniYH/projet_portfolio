<div class="card shadow-sm h-100">
    <div class="row p-1">
        <div class="col-md-4 card-image-top overflow-hidden" style="height: 220px;">
            <img src="<?= BASE_URL . $etudiant->get_image(); ?>" class="img-fluid rounded rounded-right-0 mb-4 w-100 h-100 object-fit-cover" 
            alt="Photo de <?= $etudiant->get_prenom() . ' ' . $etudiant->get_nom();?>">
        </div>
        <div class="col-md">
            <div class="card-body  d-flex flex-column">
                <h4><?= $etudiant->get_prenom() . ' ' . $etudiant->get_nom();?></h4>
                <p>Ecole : <?= $etudiant->get_etablissement(); ?></p>
                <p>Secteur : <?= $etudiant->get_filiere() ?></p>
                <p>Niveau : <?= $etudiant->get_niveau(); ?></p>
            </div>
        </div>
    </div>
</div>