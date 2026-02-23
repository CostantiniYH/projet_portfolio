<div class="container p-3">
    <div class="row gap-4">
        <form action="<?= BASE_URL ?>login" method="post" class="col-md-8 mx-auto shadow p-5 bg-modeli rounded">
            <h3 class="text-center mb-3">Connexion</h3>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        
        <section class="p-4 col-md mx-auto shadow-lg rounded-4 hvr-grow">
            <p>Vous n'avez pas encore de compte :</p>
            <a href="<?= BASE_URL ?>register" class="stretched-link nav-link"><h1>inscrivez-vous</h1></a>
        </section>
    </div>
</div>