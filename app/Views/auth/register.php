<div class="container">
    <form action="<?= BASE_URL ?>register" method="post" class="col-md-6 mx-auto shadow p-5 border border-light rounded bg-modeli">
        <h3 class="text-center mb-3">Inscription</h3>
        <div class="mb-3">
            <input type="hidden" name="id" id="id" value="<?= htmlspecialchars($_GET['id'] ?? '') ;?>">
            <label for="nom" class="form-label">Nom</label>
            <input 
                type="text" 
                class="form-control" 
                id="nom" 
                name="nom" 
                placeholder="Entrer un nom d'utilisateur"
                required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Séctionnez un rôle</label>
            <select name="role" id="role" class="form-select">
                <option value="etudiant">Etudiant</option>
                <option value="educateur">Educateur</option>
                <?php if ($_SERVER['user_role'] === 'admin'): ?>
                    <option value="">Admin</option>
                    <?php endif; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>