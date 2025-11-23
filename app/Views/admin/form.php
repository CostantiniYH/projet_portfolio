<div class="container">

    <form action="/types/ajouter" method="POST" class="p-4 mb-3 shadow-sm border rounded bg-light">
        
        <h5>Ajouter un type de ressource</h5>
        
        <div class="mb-3">
            <label class="form-label">Nom du type</label>
            <input type="text" class="form-control" name="nom_type" placeholder="Ex : Examen, Guide, Tutoriel..." required>
        </div>
        
        <button class="btn btn-secondary w-100">Ajouter</button>
        
    </form>
    
    <form action="/ressources/<?= $mode == 'update' ? 'modifier/'.$ressource['id_ressource'] : 'ajouter' ?>" 
        method="POST" 
        enctype="multipart/form-data"
        class="p-4 border rounded shadow-sm bg-light">

        <h4 class="mb-3">
            <?= $mode == 'update' ? 'Modifier la ressource' : 'Ajouter une ressource' ?>
        </h4>
        
        <!-- Titre -->
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" 
            name="titre" 
            class="form-control"
            value="<?= htmlspecialchars($ressource['titre'] ?? '') ?>" 
            required>
        </div>
        
        <!-- Description -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" 
            name="description" 
            rows="4"><?= htmlspecialchars($ressource['description'] ?? '') ?></textarea>
        </div>
        
        <!-- Type -->
        <div class="mb-3">
            <label class="form-label">Type de ressource</label>
            <select class="form-select" name="id_type" required>
                <option disabled>Choisir...</option>
                
                <?php foreach($types as $type): ?>
                    <option value="<?= $type['id_type'] ?>"
                        <?= ($ressource['id_type'] ?? null) == $type['id_type'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($type['nom_type']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- Matière -->
            <div class="mb-3">
                <label class="form-label">Matière</label>
                <select class="form-select" name="matiere">
                    <option value="">Spécialité</option>
                    <option value="SLAM" <?= ($ressource['matiere'] ?? '') == 'SLAM' ? 'selected' : '' ?>>SLAM</option>
                    <option value="SISR" <?= ($ressource['matiere'] ?? '') == 'SISR' ? 'selected' : '' ?>>SISR</option>
                </select>
            </div>
            
            <!-- Niveau -->
            <div class="mb-3">
                <label class="form-label">Niveau</label>
                <select class="form-select" name="niveau">
                    <option value="B1" <?= ($ressource['niveau'] ?? '') == 'B1' ? 'selected' : '' ?>>1ère année</option>
                    <option value="B2" <?= ($ressource['niveau'] ?? '') == 'B2' ? 'selected' : '' ?>>2ème année</option>
                </select>
            </div>
            
            <!-- Fichier -->
            <div class="mb-3">
                <label class="form-label">Changer le fichier ?</label>
                <input type="file" class="form-control" name="fichier">
                <?php if(!empty($ressource['fichier'])): ?>
                    <small class="text-muted">Fichier actuel : <?= htmlspecialchars($ressource['fichier']) ?></small>
                    <?php endif; ?>
        </div>
        
        <!-- Date -->
        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" 
            class="form-control" 
            name="date_publication"
            value="<?= htmlspecialchars($ressource['date_publication'] ?? '') ?>" 
            required>
        </div>
        
        <button class="btn btn-primary w-100">
            <?= $mode == 'update' ? 'Enregistrer les modifications' : 'Ajouter la ressource' ?>
        </button>
        
    </form>
    
</div>
<hr>