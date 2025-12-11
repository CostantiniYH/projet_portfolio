<div class="container shadow-sm p-5 rounded">
    <form action="form-competences" method="post">
        <h2>Formulaire Compétences</h2>
        <div class="mb-3">
            <label for="competence" class="form-label">Compétence</label>
            <input type="text" class="form-control" id="competence" name="competence" required>
        </div>
        <div class="mb-3">
            <label for="niveau" class="form-label">Niveau</label>
            <select class="form-select" id="niveau" name="niveau" required>
                <option value="" disabled selected>Choisir le niveau</option>
                <option value="Débutant">Débutant</option>
                <option value="Intermédiaire">Intermédiaire</option>
                <option value="Avancé">Avancé</option>
                <option value="Expert">Expert</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</div>