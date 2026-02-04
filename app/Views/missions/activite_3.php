<?php require_once dirname(__DIR__) . '/partials/navbar_activite2.html'; ?>

<main class="container-fluid">

    <section class="row p-5 bg-white" id="contexte">
        <h4 class="" onclick="this.parentElement.style.display='none'">Contexte</h4>
        <p>Cette activité consiste à mettre en place une solution système pour héberger des sites web sécurisé. </p>
            <p>Mais pourquoi avoir fait cette activité
            alors qu'elle concerne l'option SISR et que je suis en SLAM ? </p>
           <p class="text-justifier" >La réponse est simple : il s'agissait de répondre à un problème technique.
            En effet, lorsque l'on code beaucoup, il est important de s'organiser et travailler méthodiquement, c'est d'ailleurs ce qui sera évalué, en partie lors de
            notre épreuve E5. Bien sûr, nous connaissons la méthode qui consiste à faire des rapports d'activité, de TP/ TD, mais il faut aussi songé
            à administrer ses projets, activités et créations, que ce soit en apprentissage ou même dans notre carrière par la suite, car ils sont en réalité le coeur 
            de nos travaux, et par conséquent, je pense qu'il est essentiel de les rendre accessible.  J'ai donc décidé de le faire moi-même et d'en faire une activité documentée, ce qui m'a permis d'enrichir mes compétences en systèmes et 
            réseaux et dans le même temps de produire du contenu pour mon portfolio.
        </p>
    </section>

    <section class="row gap-3 p-5 bg-obj" id="objectifs">
        <div class="col-md rounded-1 bg-white text-black p-5">
            <h4 class="text-center mb-4">Objectifs <i class="bi bi-arrow-down-circle-fill"></i></h4>            
            <ul class="list-group">
                <li class="list-group-item">Réseau</li>
                <li class="list-group-item">Sécurité</li>
                <li class="list-group-item">Segmentation</li>
                <li class="list-group-item">Scalabilité</li>
                <li class="list-group-item">Architecture d'entreprise</li>
            </ul>
        </div>
        <div class="col-md rounded-1 bg-white text-black p-5">
            <h4 class="text-center mb-4">Compétences requises <i class="bi bi-arrow-down-circle-fill"></i></h4>
            <ul class="list-group">
                <?php
                function stars($n) {
                    $star = '<span class="bi bi-star-fill text-warning"></span>';
                    $star_empty = '<span class="bi bi-star text-warning"></span>';

                    
                    for ($i = $n; $i > 0; $i--) {
                       echo $star;
                    }
                    for ($j = $n; $j < 5; $j++) {
                        echo $star_empty;
                    }
                }
                ?>

                <li class="list-group-item bg-success alert text-white">Administration Linux <?php stars(3) ?></li>
                <li class="list-group-item bg-success alert text-white">Réseaux (IP, ports, bridges, NAT)   <?php stars(4) ?></li>
                <li class="list-group-item bg-success alert text-white">Sécurité serveur   <?php stars(2) ?></li>
                <li class="list-group-item bg-success alert text-white">Déploiement web   <?php stars(4) ?></li>
                <li class="list-group-item bg-success alert text-white">Reverse Proxy   <?php stars(3) ?></li>
                <li class="list-group-item bg-success alert text-white">HTTPS   <?php stars(4) ?></li>
                <li class="list-group-item bg-success alert text-white">BDD sécurisé   <?php stars(3) ?></li>
                <li class="list-group-item bg-success alert text-white">Architecture scalable   <?php stars(3) ?></li>
                <li class="list-group-item bg-success alert text-white">Docker   <?php stars(2) ?></li>
                <li class="list-group-item bg-success alert text-white">DevOps de base   <?php stars(1) ?></li>
            </ul>
        </div>
            
    </section>

    <section class="row gap-3 p-4 bg-infra" id="infra">        
        <h4>Solution infrastructure Système & réseau</h4>
        <div class="bg-white text-black p-4 rounded-1">
            <p>L'architecture se présente de la façon suivante : </p>
            <p>Nous allons utilisé 3 serveurs : un Revrse Proxy, un serveur applicatif, et un serveur BDD</p>
            <p>Un réseau privé entre les 3 serveurs, seul 1 serveur sera exposé au réseau.</p>
            <div class="row">
                <a href="/uploads/activites/infra-reseau-srv.drawio.png" target="_blank">
                <img class="p-3 rounded-1 shadow col-md-4 d-block img-infra bg-secondary" src="<?= BASE_URL ?>uploads/activites/infra-reseau-srv.drawio.png" 
                alt="" ></a>
            </div>
        </div>
    </section>

    <section class="row gap-3 p-5 bg-tech" id="mise-en-oeuvre">
        <h4>Mise en œuvre technique</h4>
        <div class="bg-white text-black p-3 rounded text-justifier">
            <p class="mb-5">On ouvre Virtual Box et on crée et configure les machines virtuelles nécessaires selon le schéma de l'infrastructure réseau. Puis, on installe
                les OS prévue pour chaque serveur avec l'image iso suivante : 
                <a href="https://ubuntu.com/download/server" target="_blank">https://ubuntu.com/download/server</a>.
                Il est tout à fait possible de créer une première machine avec les fonctinonalités de base, puis de la clonner pour les 2 autres machines
            </p>
        </div>
        <hr>
        <h5 class="mb-4">Installation de la première VM :</h5>
        <div class="card shadow p-3 col-md">
            <div class="row">                
                <div class="col-md"  style="min-width: 10rem;">
                    <img class="img-fluid rounded" src="<?= BASE_URL ?>uploads/activites/ubuntu.png" alt="">
                </div>
                <div class="col-md">                
                    <strong class="mb-3">SRV-1 - Proxy</strong>
                    <ul class="list-group">
                        <h6>Services :</h6>
                        <li class="list-group-item">Proxy : point d'entrée</li>
                        <li class="list-group-item">Nginx</li>
                        <li class="list-group-item">HTTPS</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md bg-white text-black p-5 rounded">
            <p class="text-justifier">
                Ce serveur permet de sécurisé l'accès en bloquant les entrées non autorisées via le pare-feu (firewell). Les outils et 
                services utilisés à ce stade sont : 
            </p>
            <ul>
                
                <li><strong>OpenSSH :</strong> connxeion autorisée</li>
                <li><strong>ufw :</strong> pare-feu</li>
                <li><strong>fail2ban :</strong> logiciel de protection des attaques par force brut</li>             
            </ul>
            <div class="alert alert-warning text-justifier">
                Important ! Configurer le fichier <i>/etc/netplane/00-installer-config.yaml</i> pour l'IP du réseau interne, car
                ce réseau sera contrôlé par SRV-1 (hostname: srv-proxy)
            </div>
        </div>
        <hr class="mt-5">

        <h5 class="mb-4 mt-5">Installation de la deuxième VM :</h5>
        <div class="col-md">
            <p>
                 
            </p>
            <ul>
                
                <li><strong> :</strong> </li>
                <li><strong> :</strong> </li>
                <li><strong> :</strong> </li>             
            </ul>
        </div>
        <div class="card shadow p-3 col-md">
            <div class="row">                
                <div class="col-md"  style="min-width: 10rem;">
                    <img class="img-fluid rounded" src="<?= BASE_URL ?>uploads/activites/ubuntu.png" alt="">
                </div>
                <div class="col-md">                
                    <strong class="mb-3">SRV-2 - Applicatif</strong>
                    <ul class="list-group">
                        <h6>Services :</h6>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>                        
                    </ul>
                </div>
            </div>
        </div>

        <hr class="mt-5">

        <h5 class="mb-4 mt-5">Installation de la troisième VM :</h5>
        <div class="card shadow p-3 col-md">
            <div class="row">                
                <div class="col-md"  style="min-width: 10rem;">
                    <img class="img-fluid rounded" src="<?= BASE_URL ?>uploads/activites/ubuntu.png" alt="">
                </div>
                <div class="col-md">                
                    <strong class="mb-3">SRV-3 - Base de données</strong>
                    <ul class="list-group">
                        <h6>Services :</h6>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>                        
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md">
            <p>
                 
            </p>
            <ul>
                
                <li><strong> :</strong> </li>
                <li><strong> :</strong> </li>
                <li><strong> :</strong> </li>             
            </ul>
        </div>
    </section>

     <section class="row p-5 bg-sec" id="securite">
        <h4>Sécurité</h4>
    </section>

    <section class="row p-5 bg-test" id="test">
        <h4>Test</h4>
    </section>

    <section class="row p-5 bg-white bg-opacity-50" id="bilan">
        <h4>Bilan</h4>
    </section>
</main>