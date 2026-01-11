<?php 
    require_once __DIR__ . '/navbar.php';
?>

<div class="" style="margin-top: 90px;">


    <?php
        // URL complète
        $currentUrl = $_SERVER['REQUEST_URI'];

        // On retire les éventuels paramètres GET
        $currentPath = parse_url($currentUrl, PHP_URL_PATH);

        // On enlève BASE_URL si présent
        $relativePath = str_replace(BASE_URL, '', $currentPath);

        // On retire un éventuel slash final
        $relativePath = trim($relativePath, '/');

        // Si la page s'appelle "expertises", "services", etc.
        $currentPage = $relativePath ?: 'accueil';

        // Mise en forme pour affichage
        $currentPageLabel = ucfirst(str_replace(['-', '_'], ' ', $currentPage)); 

        if ($currentPage) {?>

        <div class="text-center position-relative mt-5">
            <img style="height: 300px;" src="<?= BASE_URL ?>assets/divers/futuriste.jpg" alt="photo futuriste" 
            class="mb-4 w-100  rounded-5 rounded-top-0">
            <h1 style="top: 150px; height: 300px; padding-top: 100px;" class=" mb-4 position-absolute  start-50 translate-middle w-100 bg-dark bg-opacity-50 text-white rounded-5 rounded-top-0">
                <?= ucwords($currentPageLabel) ?></h1>
        </div>

    <?php } ?>

    <?php if (isset($_SESSION['flash'])) {
        foreach ($_SESSION['flash'] as $type => $message) { ?>
            <div class="container alert alert-<?= $type ?>">
                <?= $message; ?>
            </div>
        <?php }
        unset($_SESSION['flash']);
    }?>

    <p class="container p-4">
        <a class="text-dark" href="<?= BASE_URL ?>">Accueil</a>
        <?php if ($currentPage !== 'accueil') : ?>
        / <?= $currentPageLabel ?>
        <?php endif; ?>
    </p>

</div>
