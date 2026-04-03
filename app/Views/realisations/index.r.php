<div class="container">
    <!-- Condition d'affichage admin -->
    <?php
        if (!empty($_SESSION['user']) && $_SESSION['user']['role'] == 'admin') {
            $display = "";
        } else {
            $display = 'd-none';
        }
    ?>
    <!-- Cette section est concernée par la condition d'affichage -->
    <section class="row p-5 <?= $display ?>">
        <div class="col-md-3 col-sm-12">
            <div class="h-100 bg-bleu-marine">
                <h3 class="w-100">Epreuve E5</h3>
            </div>
        </div>
        <div class="col-md">
            <div class=" bg-white p-3 rounded">
                <p class="alert alert-warning">Le dépôt du dossier de l'épreuve E5 doit se faire à partir du 17 
                    février jusqu'au le 20 mars (23 à midi) maximum.</p>
                <p>Documents à avoir le jour de l'épreuve :</p>
                <ul>
                    <li>Son portfolio</li>
                    <li>Le tableau de synthèse</li>
                    <li>Attestation de présence en entreprise</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Cette section est concernée par la condition d'affichage -->
    <section class="row p-5 <?= $display ?>">
        <div class="col-md">
            <div class="h-100 card p-0 border-0 shadow position-relative">
                <img class="img-filtre img-fluid" src="<?= BASE_URL ?>uploads/activites/ecole.png" alt="">
                <div class="position-absolute text-white top-50 start-50 translate-middle">
                    <h4 class="">Activité école</h4>
                </div>
                <a href="activites-ecole" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-md">
            <div class="h-100 card border-0 p-0 shadow position-relative">
                <img class="img-filtre img-fluid" src="<?= BASE_URL ?>uploads/activites/entreprise.png" alt="">
                <div class="position-absolute text-white top-50 start-50 translate-middle">
                    <h4 class="">Activité Entreprise</h4>
                </div>
                <a href="activites-entreprise" class="stretched-link"></a>
            </div>
        </div>
    </section>
</div>

<!-- Bandeau titre 1 : activités Formation première et deuxième année -->
<!-- <section class=" bg-dev p-5">
    <h1 class="text-center">Liste des activités en Formation</h1>
</section> -->

<div class="container">
    <section class="row g-5 p-5">
        <!-- Première activité -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <img src="<?= BASE_URL ?>uploads/activites/virtual_box.png" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 1 - Création, configuration et clonage d’une machine virtuelle</h5>
                    <p class="card-text">Il s'agit d'une virtualisation infrastructure et réseau avec Ubuntu Server 24.04 LTS sous Virtual Box</p>
                    <small class="d-block mb-3"></small>
                    </div>
                    <a href="<?= BASE_URL ?>ressources/masques/RA-creation_config_clonage_vms_vbox.pdf" class="mt-auto btn btn-activite stretched-link card-footer w-100"
                    target="_blank">Cliquer pour voir le détail</a>
            </div>
        </div>

        <!-- Deuxième activité -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 w-100">
                <img src="<?= BASE_URL ?>uploads/activites/gestionuglocaux.png" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 2 - Gestion des utilisateurs et des groupes locaux dans un réseau poste-à-poste</h5>
                    <p class="card-text"></p>
                </div>
                <a href="<?= BASE_URL ?>ressources/masques/RA-gestion_users.pdf" class="mt-auto btn btn-activite stretched-link card-footer w-100"
                target="_blank">Cliquer pour voir le détail</a>
            </div>   
        </div>
        
        <!-- Troisième activité -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 w-100">
                <img src="<?= BASE_URL ?>uploads/activites/partage.png" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 3 - Partage de fichiers et dossiers entre machine hôte et virtuelle</h5>
                    <p class="card-text">
                    </p>
                </div>
                <a href="#<?= BASE_URL ?>ressources/masques/.pdf" class="mt-auto btn btn-activite stretched-link card-footer w-100" 
                target="#_blank">Cliquer pour voir le détail</a>
            </div>
        </div>

        <!-- Quatrième activité -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 w-100">
                <img src="<?= BASE_URL ?>uploads/activites/.png" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 4 - Affichage d'un CV en HTML / CSS</h5>
                    <p class="card-text"></p>
                    </div>
                    <a href="#" class="mt-auto btn btn-activite stretched-link card-footer w-100">Cliquer pour voir le détail</a>
            </div>
        </div>

        <!-- Cinquième activité -->
         <div class="col-lg-4 col-md-6">
            <div class="card h-100 w-100">
                <img src="<?= BASE_URL ?>uploads/projets/portfolio.png" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 5 - Développer un site portfolio</h5>
                    <p class="card-text text-justifier">
                        Créer un site vitrine professionnel pour développer et promouvoir son image
                    </p>
                </div>
                <a href="#<?= BASE_URL ?>ressources/masques/" 
                class="mt-auto btn btn-activite stretched-link card-footer w-100" target="#_blank">Cliquer pour voir le détail</a>
            </div>
        </div>

        <!-- Sixième activité -->
         <div class="col-lg-4 col-md-6">
            <div class="card h-100 w-100">
                <img src="<?= BASE_URL ?>uploads/activites/UML.png" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 6 - Modélisation BDD</h5>
                    <p class="card-text">
                        Modélisation de la base de données d'un chat instantané
                    </p>
                </div>
                <a href="<?= BASE_URL ?>ressources/masques/rapport-activite-modeli_chat-slam.pdf" 
                class="mt-auto btn btn-activite stretched-link card-footer w-100" target="#_blank">Cliquer pour voir le détail</a>
            </div>
        </div>

        <!-- Septième activité -->
         <div class="col-lg-4 col-md-6">
            <div class="card h-100 w-100">
                <img src="<?= BASE_URL ?>uploads/projets/gdm1.png" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 7 - Mise-à-jour PHP et déploiement serveur</h5>
                    <p class="card-text text-justifier">
                        Effectuer une mise-à-jour pour afficher dynamiquement une quantité de données à partir
                        d'une base de données, et la déployer sur serveur
                    </p>
                </div>
                <a href="#<?= BASE_URL ?>ressources/masques/" 
                class="mt-auto btn btn-activite stretched-link card-footer w-100" target="#_blank">Cliquer pour voir le détail</a>
            </div>
        </div>

        <!-- Huitième activité -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 w-100">
                <img src="<?= BASE_URL ?>uploads/activites/ubuntu_install.png" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 8 - Hébergement server</h5>
                    <p class="card-text text-justifier">Mise en place d'une solution pour héberger des applications 
                        sur Ubuntu server</p>
                    </div>
                    <a href="#" class="mt-auto btn btn-activite stretched-link card-footer w-100"
                    >Cliquer pour voir le détail</a>
            </div>
        </div>

        <!-- Neuvième activité -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 w-100">
                <img src="<?= BASE_URL ?>uploads/activites/chatv1_5.jpg" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 9 - Développer un chat instantané en PHP/ MySQL</h5>
                    <p class="card-text text-justifier">Mode procédural et mysqli</p>
                </div>
                <a href="<?= BASE_URL ?>ressources/masques/rapport-activite-dev_chat-slam.pdf" target="#_blank" 
                class="mt-auto btn btn-activite stretched-link card-footer w-100">
                Cliquer pour voir le détail</a>
            </div>
        </div>

        <!-- Dixième activité -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 w-100">
                <img src="<?= BASE_URL ?>uploads/activites/gitGithub.png" alt="" 
                class="card-img-top img-fluid" style="height: 13rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Activité 10 - Mise en place d’un workflow Git/GitHub</h5>
                    <p class="card-text text-justifier">
                        Démarche organisée pour enregistrer, versionner et déployer ses travaux
                    </p>
                </div>
                <a href="#" class="mt-auto btn btn-activite stretched-link card-footer w-100">Cliquer pour voir le détail</a>
            </div>
        </div>
        
        <!-- Onzième activité -->
        <div class="col-lg-4 col-md-6">
           <div class="card h-100 w-100">
               <img src="<?= BASE_URL ?>uploads/activites/chat_last_version.png" alt="" 
               class="card-img-top img-fluid" style="height: 13rem;">
               <div class="card-body d-flex flex-column">
                   <h5 class="card-title">Activité 11 - Migration MVC</h5>
                   <p class="card-text text-justifier">
                    Effectuer une migration d'un code en mode procédural vers une architecture MVC et
                     remplacer mysqli par PDO (Sécurité SQL)
                    </p>
                   </div>
                   <a href="#" class="mt-auto btn btn-activite stretched-link card-footer w-100">Cliquer pour voir le détail</a>
           </div>
        </div>

        <!-- 12e activité -->
        <div class="col-lg-4 col-md-6">
           <div class="card h-100 w-100">
               <video class="card-img img-fluid" autoplay muted style="height: 13rem; width: 100%; overflow: hidden; background-size: cover;">
                    <source src="<?= BASE_URL ?>uploads/videos/Screen_Recording_Windows_App.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas le format de cette vidéo
                </video>
               <div class="card-body d-flex flex-column">
                   <h5 class="card-title">Activité 12 - Gestion d'incident avec connexion bureau à distance sur mobile</h5>
                   <p class="card-text text-justifier">
                    Activer la connexion bureau à distance de Windows, créer la connexion mobile en WAN et résoudre l'incident
                    </p>
                   </div>
                   <a href="#" class="mt-auto btn btn-activite stretched-link card-footer w-100">Cliquer pour voir le détail</a>
           </div>
       </div>
    </section>

    
</div>

