<div class="card shadow-sm h-100">
    <div class="row p-1">
        <div class="col-md-4 card-image-top overflow-hidden" style="height: 220px;">
            <img src="<?= BASE_URL . $user['image'] ?? '';?>" class="img-fluid rounded rounded-right-0 mb-4 w-100 h-100 object-fit-cover" 
            alt="Photo de <?= $user['prenom'] ?? '' . ' ' . $user['nom'];?>">
        </div>
        <div class="col-md">
            <div class="card-body  d-flex flex-column">
                <h4><?= $user['prenom'] ?? '' . ' ' . $user['nom'];?></h4>
                <p>Ecole : <?= $user['etablissement'] ?? ''; ?></p>
                <p>Secteur : <?= $user['filiere'] ?? ''; ?></p>
                <p>Niveau : <?= $user['niveau'] ?? ''; ?></p>
            </div>
        </div>
    </div>    
</div>