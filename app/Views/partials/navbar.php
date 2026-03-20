<header class="fixed-top " data-aos="fade-down" data-aos-duration="1000">
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
      <div class="container-fluid">
        <a class="p-3 rounded navbar-brand fw-bold"
        href="<?= BASE_URL ?>presentation">
          <img src="<?= BASE_URL ?>assets/icons/spart1.png" alt="image_portfolio"
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
              <a class="nav-link bi bi-house-fill" href="<?= BASE_URL ?>presentation"> Présentation</a>
            </li>
            <li class="nav-item nav-hov">
              <a class="nav-link " href="<?= BASE_URL ?>realisations">Réalisations</a>
            </li>
            <li class="nav-item nav-hov">
              <a class="nav-link " href="<?= BASE_URL ?>E5">E5</a>
            </li>
            <li class="nav-item nav-hov">
              <a class="nav-link " href="<?= BASE_URL ?>E6">E6</a>
            </li>
            <li class="nav-item nav-hov">
              <a class="nav-link" href="<?= BASE_URL ?>cybersecurite">Cybersécurité</a>
            </li>
            <li class="nav-item nav-hov">
              <a class="nav-link nav-hov" href="<?= BASE_URL ?>veille-technologique">Veille Technologique</a>
            </li>    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Voir plus
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item nav-hov" href="<?= BASE_URL ?>a-propos">A propos</a>
                </li>
                <li>
                  <a class="dropdown-item nav-hov" href="<?= BASE_URL ?>contact">Contact</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']) && $_SESSION['logged_in'] == true) : ?>
              <li class="nav-item nav-hov navbar-collapse">
                <a class="nav-link bi bi-door-open-fill text-danger" href="<?= BASE_URL ?>logout"></a>
              </li>
            <?php else: ?>
              <li class="navbar-item">
                <a class="nav-link bi bi-person-circle fs-2" href="<?= BASE_URL ?>login"></a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
</header>