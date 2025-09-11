<?php ob_start(); ?>
    <h1>Bienvenue sur YHC Portfolio</h1> 
    <ul>
        <?php foreach ($projets as $projet): ?>
            <li>
                <strong><?= htmlspecialchars($projet['title'], ENT_QUOTES, 'UTF-8') ?></strong> 
                - <?= htmlspecialchars($projet['desc'], ENT_QUOTES, 'UTF-8') ?>
            </li>
        <?php endforeach ?>
    </ul>    
<?php $content = ob_get_clean(); ?>
<?php
$titre = "Accueil";
require __DIR__ . '/layout.php';
?>