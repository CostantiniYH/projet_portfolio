<div class="container">

    <!-- Titre Compétences-->
    <div class="drop-shadow mb-5">
         <section class="bg-projet-1 rounded-4">
             <hr class="text-vert border-2">
             <h1 class="p-4 text-black text-center" style="font-size: 3rem">SIO - Epreuve E6 - SLAM</h1>
            <hr class="text-vert border-2">
        </section>
    </div>
    <!-- Condition d'affichage admin -->
    <?php
        if (!empty($_SESSION['user']) && $_SESSION['user']['role'] == 'admin') {
            $display = "";
        } else {
            $display = 'd-none';
        }
    ?>
    <!-- Cette section est concernée par la condition d'affichage -->
    <section class="row text-justifier <?= $display ?>">
        <div class="col-md">
            <div class="h-100 bg-bleu-marine">
                <h3 class="">Epreuve E6</h3>        
            </div>
        </div>
        <div class="col-md">
            <div class="rounded p-4 shadow-sm bg-white">
                <div class="alert alert-warning">Date butoire 9 avril</div>
                <h4 class="text-center"></h4>
                <p>Les ressources des traveaux effectués durant la formation doivent être accessibles le 20 mai. <i>(Liens GitHub, liens sites, Codes des 2 projets de l'E6)</i></p>
                <p>Le contenu d'un projet doit avoir 3/4 minimum des points suivants : </p>
                <ul>
                    <li>Client léger</li>
                    <li>Client loud</li>
                    <li>Programmation serveur</li>
                    <li>Mobile</li>
                </ul>
            </div>
        </div>
        <div class="col-md">
            <div class="h-100 rounded p-4 shadow-sm bg-white">  
                <h4 class="text-center">Déroulé de l'épreuve</h4>      
            <p>Etape 1 : </p>
                <p>30 min de préparation seul :
                    <ul class="list-item-group">
                        <li>Présentation personnelle</li>
                        <li>Présentation entreprise</li>
                        <li>Présentation activites</li>
                        <li>Thème de la veille</li>
                    </ul>
                </p>
                <p>Etape 2 : 20 min oral</p>
                <p>Etape 3 : 1h préparation</p>
                <p>Etape 4 : 20 min recette</p>
            </div>
        </div>
    </section>

    <section class="row mb-3 <?= $display ?>">
        <div class="col-md">
            <div class="bg-sec p-3 border border-2 border-danger">
                <h4>Ressources officielles de la Maison des examens</h4>
                <a href="https://siec.education.fr/candidats/docutheque/bts-services-informatiques-aux-organisations-sio-session-2026"
                class="stretched-link" target="_blank"></a>
            </div>
        </div>
    </section>


    <!-- Carte projet 1 : client léger e-commerce -->
    <section class="card mb-5 rounded-4">
        <div class="row p-">
            <div class="col-md position-relative hover-card-img card-img">
                <img class="img-fluid h-100 rounded-4 img-filtre" src="<?= BASE_URL ?>uploads/projets/ecom1.png" alt="">
                <div class="position-absolute titre-projet text-white top-50 start-50 translate-middle">
                    <h4>Cliquez pour atteindre le site <i class="fs- bi bi-arrow-right hvr-forward"></i></h4>
                </div>
                <a href="https://costantini.freeboxos.fr/projet-ecom" target="_blank" class="stretched-link"></a>
            </div>
            <div class="col-md">
                <div class="card-body text-dark">    
                    <h4 class="">E-Commerce (Web PHP)</h4>
                    <h5>Application Web de vente en ligne</h5>
                    <p class="text-justifier">Développement d'une plateforme marchande incluant une interface client dynamique, un espace 
                        d'administration des ventes (Produit/ catégorie), la gestion du panier, et la validation de commande.
                    </p>
                    <strong>Langages :</strong>
                    <p>
                        <div class="tech-stack">
                            <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded m-1"> HTML</span>           
                            <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded m-1"> CSS</span>             
                            <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded m-1"> PHP</span>
                            <span class="devicon-mysql-plain colored bg-white shadow-sm border p-2 rounded m-1"> MySQL</span>
                            <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded m-1"> Git</span>
                        </div>
                    </p>
                    Ressources téléchargeables :
                    <div class="row p-2">
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Diagramme de Gantt du projet <i class="bi bi-diagram-3-fill float-end"></i>
                        </a>
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Cahier des charges <i class="bi bi-file-earmark-arrow-down-fill float-end"></i>
                        </a>
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Devis <i class="bi bi-file-earmark-arrow-down-fill float-end"></i>
                        </a>
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Documentation utilisateur <i class="bi bi-file-earmark-arrow-down-fill float-end"></i>
                        </a>
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Documentation technique <i class="bi bi-file-earmark-arrow-down-fill float-end"></i>
                        </a>
                        <a role="button" href="https://github.com/CostantiniYH/projet_ecom" target="_blank" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Code source <i class="bi bi-github float-end"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carte projet 2 :client lourd - CMS Bibliothèque Java (Reverse) -->
    <section class="card mb-3 rounded-4">
        <div class="row flex-md-row-reverse">
            <div class="col-md position-relative">
                <!-- <img class="img-filtre img-fluid h-100 rounded-4" src="<?= BASE_URL ?>uploads/projets/" alt=""> -->
                <div class=" position-absolute text-white top-50 start-50 translate-middle">
                    
                </div>
                <a href="https://costantini.freeboxos.fr/projet-ecom" target="_blank" class="stretched-link"></a>
            </div>
            <div class="col-md">
                <div class="card-body text-dark">    
                    <h4 class=""> SIGB (Système Intégré de Gestion de biblitothèque)</h4>
                    <h5>Application de bureau Java (Client lourd)</h5>                
                    <p class="text-justifier">Conception et développement d'une solution de gestion du parc documentaire permettant le suivi d'un 
                        catalogue de bibliothèque, la gestion des adhérents et des flux d'emprunts.</p>
                        Ressources téléchargeables :
                        <div class="row p-2">
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Diagramme de Gantt du projet <i class="bi bi-diagram-3-fill float-end"></i>
                        </a>
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Cahier des charges <i class="bi bi-file-earmark-arrow-down-fill float-end"></i>
                        </a>
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Devis <i class="bi bi-file-earmark-arrow-down-fill float-end"></i>
                        </a>
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Documentation utilisateur <i class="bi bi-file-earmark-arrow-down-fill float-end"></i>
                        </a>
                        <a role="button" href="<?= BASE_URL ?>ressources/documentation/" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Documentation technique <i class="bi bi-file-earmark-arrow-down-fill float-end"></i>
                        </a>
                        <a role="button" href="https://github.com/CostantiniYH/projet_java" target="_blank" class="btn btn-outline-success mb-1 shadow-sm text-start">
                            Code source <i class="bi bi-github float-end"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>