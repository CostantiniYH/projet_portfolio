<?php require_once dirname(__DIR__) . '/partials/navbar_activite2.html'; ?>

<main class="container">

    <section class="row shadow-sm mb-4 p-3 rounded bg-white bg-opacity-50" id="contexte">
        <h4 class="">Contexte</h4>
        <p>Cette activité consiste à mettre en place une solution système pour héberger des sites web sécurisé.

        </p>
    </section>

    <section class="row shadow-sm mb-4 p-3 rounded bg-white bg-opacity-50" id="objectifs">
        <div class="col-md">
            <h4 class="text-center">Objectifs <i class="bi bi-arrow-down-circle-fill"></i></h4>            
            <ul class="list-group">
                <li class="list-group-item">Réseau</li>
                <li class="list-group-item">Sécurité</li>
                <li class="list-group-item">Segmentation</li>
                <li class="list-group-item">Scalabilité</li>
                <li class="list-group-item">Architecture d'entreprise</li>
            </ul>
        </div>
        <div class="col-md">
            <h4 class="text-center">Compétences utilisées <i class="bi bi-arrow-down-circle-fill"></i></h4>
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

    <section class="row shadow-sm mb-4 p-3 rounded bg-white bg-opacity-50" id="infra">
        <h4>Infrastructure</h4>
        <p>L'architecture se présente de la façon suivante : </p>
        <p>Nous allons utilisé 3 serveurs : un Revrse Proxy, un serveur applicatif, et un serveur BDD</p>
        <p>Un réseau privé entre les 3 serveurs, seul 1 serveur sera exposé au réseau.</p>
    </section>

    <section class="row shadow-sm mb-4 p-3 rounded bg-white bg-opacity-50" id="mise-en-oeuvre">
        <h4>Mise en œuvre technique</h4>
        <p class="mb-5">On ouvre Virtual Box et on crée et configure les machines virtuelles nécessaires selon le schéma de l'infrastructure réseau. Puis, on installe
            les OS prévue pour chaque serveur avec les image iso suivants : 
            <a href="https://ubuntu.com/download/server">https://ubuntu.com/download/server</a>
        </p>
        <h5 class="mb-4">Installation de la première VM :</h5>
        <div class="card p-3 col-md">
            <div class="row">                
                <div class="col-md"  style="min-width: 10rem;">
                    <img class="img-fluid rounded" src="/uploads/activites/ubuntu.png" alt="">
                </div>
                <div class="col-md">                
                    <strong class="mb-3">SRV-1 - Proxy</strong>
                    <ul class="list-group">
                        <h6>Services :</h6>
                        <li class="list-group-item">Proxy</li>
                        <li class="list-group-item">Nginx</li>
                        <li class="list-group-item">HTTPS</li>
                        <li class="list-group-item">Point d'entrée</li>                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md">
            <p>
                Ce serveur permet de sécurisé l'accès en bloquant les entrées non autorisées via le pare-feu (firewell). Les outils et 
                services utilisés à ce stade sont : 
            </p>
            <ul>
                
                <li><strong>ufw :</strong> pare-feu</li>
                <li><strong>OpenSSH :</strong> connxeion autorisée</li>
                <li><strong>fail2ban :</strong> logiciel protection SSH par force brut</li>             
            </ul>
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
        <div class="card p-3 col-md">
            <div class="row">                
                <div class="col-md"  style="min-width: 10rem;">
                    <img class="img-fluid rounded" src="/uploads/activites/ubuntu.png" alt="">
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
        <div class="card p-3 col-md">
            <div class="row">                
                <div class="col-md"  style="min-width: 10rem;">
                    <img class="img-fluid rounded" src="/uploads/activites/ubuntu.png" alt="">
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

     <section class="row shadow-sm mb-4 p-3 rounded bg-white bg-opacity-50" id="securite">
        <h4>Sécurité</h4>
    </section>

    <section class="row shadow-sm mb-4 p-3 rounded bg-white bg-opacity-50" id="test">
        <h4>Test</h4>
    </section>

    <section class="row shadow-sm mb-4 p-3 rounded bg-white bg-opacity-50" id="bilan">
        <h4>Bilan</h4>
    </section>
</main>