<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $description ?? 'Portfolio de Yaacov Costantini, développeur web et mobile' ?>">  
  <title><?= $titre ?? 'Portfolio YHC' ?></title>
  <link rel="shortcut icon" href="<?= BASE_URL ?>uploads/icons/portfolio_13.jpg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">    
  <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
  
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
$currentPageLabel = ucfirst(str_replace('-', ' ', $currentPage)); 

require_once __DIR__ . '/header.php';
?>

<div class="mb-5" style="margin-top: 80px;" data-aos="fade-up" data-aos-duration="1000">

  <?php 
if ($currentPage === 'accueil' || $currentPage === 'presentation') {?>
  <div class="text-center position-relative mt-5">
      <img style="height: 300px;" src="<?= BASE_URL ?>uploads/futuriste.jpg" alt="photo futuriste" 
      class="mb-4 w-100">
      <h1 style="top: 150px; height: 300px; padding-top: 100px;" class=" mb-4 position-absolute  start-50 translate-middle w-100 bg-dark bg-opacity-50 text-white">
        Présentation YHC</h1>
  </div>
<?php } ?>

  <p class="container p-5">
    <a class="text-dark" href="<?= BASE_URL ?>">Accueil</a>
    <?php if ($currentPage !== 'accueil') : ?>
      / <?= $currentPageLabel ?>
      <?php endif; ?>
    </p>

    <div class="container">
      <?= $content ?>
    </div>

  </div>

<?php require_once __DIR__ . '/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="<?= BASE_URL ?>js/script.js"></script>
</body>
</html>