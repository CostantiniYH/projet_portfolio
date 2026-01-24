<header class="fixed-top " data-aos="fade-down" data-aos-duration="1000">
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
      <div class="container-fluid">
        <a class="p-3 rounded navbar-brand  fw-bold hvr-shutter-out-vertical"
        href="/">
          <img src="<?= BASE_URL ?>assets//icons/portfolio_13.jpg" alt="image_portfolio"
          class="image-fluid rounded-3" style="background-image: none;height:40px; width:40px;">
          YHC
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item nav-hov">
              <a class="nav-link bi bi-house-fill" href="/"></a>
            </li>
            <li class="nav-item nav-hov">
              <a class="nav-link " href="presentation">Présentation</a>
            </li>
            <li class="nav-item nav-hov">
              <a class="nav-link " href="activites">Missions</a>
            </li>
            <li class="nav-item nav-hov">
              <a class="nav-link " href="projets">Projets</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="activites" role="button" data-bs-toggle="dropdown" aria-expanded="false">Missions</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item nav-hov" href="activite">Activités Entreprise</a>
                </li>
                <li>
                  <a class="dropdown-item nav-hov" href="activite_2">Activités Ecole</a>
                </li>
              </ul>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projets</a>
              <ul class="dropdown-menu">
                <?php
                $projets = [];
                  for ($i = 1; $i <= 3; $i++) {
                    $link = "projet_$i";
                    $name = "Projet $i";
                    $projet = [
                      'link' => $link,
                      'name' => $name
                    ];
                    $projets[] = $projet;
                  }
                  foreach ($projets as $key) {
                ?>
                  <li>
                    <a class="dropdown-item nav-hov" href="<?= $key['link'] ?>"><?= $key['name'] ?></a>
                  </li>
                <?php } ?>
              </ul>
            </li> -->
            <li class="nav-item nav-hov">
              <a class="nav-link " href="realisations">Réalisations Pros</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Voir plus
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item nav-hov" href="cybersecurite">Cybersécurité</a>
                </li>
                <li>
                  <a class="dropdown-item nav-hov" href="veille-technologique">Veille Technologique</a>
                </li>    
                <li>
                  <a class="dropdown-item nav-hov" href="contact">Contact</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item nav-hov navbar-collapse">
              <a class="nav-link" href="register">S'inscrire</a>
            </li>
            <li class="navbar-item">
              <a class="nav-link bi bi-person-circle fs-2" href="login"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>