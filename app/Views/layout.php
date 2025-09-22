<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titre ?? 'Portfolio YHC' ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">    
  <link rel="stylesheet" href="/projet_portfolio/public/css/style.css">
</head>
<body>
     <header class="py-4">
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
      <a href="#" class=" text-white position-fixed ms-2" data-bs-toggle="tooltip"
         data-bs-placement="right" title="Ne pas inclure dans l'intégration"></a>
      <div class="container">
        <a class="navbar-brand text-uppercase fw-bold" href="#">
          <span class="bg-primary bg-gradient p-1 rounded text-light">Portfolio</span> YHC
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link hvr-overline-reveal" href="#johndoe">Qui suis-je ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-overline-reveal" href="#expertise">Expertises</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-overline-reveal" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-overline-reveal" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
    
    <div class="container mt-4">
        <?= $content ?>
    </div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; <?= date('Y') ?> Portfolio YHC - Tous droits réservés</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="/projet_portfolio/public/js/script.js"></script>
</body>
</html>