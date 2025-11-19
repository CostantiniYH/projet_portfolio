<form action="auth\register">
    <div class="mb-3">
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
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirmer le mot de passe</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>