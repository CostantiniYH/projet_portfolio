<header class="bg-blue text-white p-5 mb-5 shadow">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1 class="display-4 fw-bold">Yaacov Costantini</h1>
            <p class="lead mb-0">Développeur Applications & Solutions Logicielles</p>
            <p class="small opacity-75">Étudiant en alternance passionné par les expériences numériques.</p>
        </div>
        <div class="text-center">            
            <a href="<?= BASE_URL ?>assets/cv.html" class="cv-brand bi bi-eye-fill d-block mb-3" target="_blank"> CV</a>
            <a href="<?= BASE_URL ?>ressources/cv/CV-YHC-fs14-ech85.pdf" download="CV_Yaacov_Costantini.pdf" class="cv-brand small bi bi-download">
                 PDF
            </a>
        </div>
    </div>
</header>
<div class="">
<!-- <a href="<?= BASE_URL ?>ressources/cv/CV-YHC-fs14-ech85.pdf" target="_blank">Télécharger le CV</a> -->
    <section class="container">
        <div class="row p-5">            
            <h1 class="text-center">Bienvenue</h1>
        </div>
    </section>
    <?= $_SESSION["user"] ?? '' ?>
    
    <!-- Titre Formation -->
     <div class="container-fluid">
         <div class="row drop-shadow">
             <section class="bg-projet-1">
                 <!-- <hr class="text-rouge border-2"> -->
                 <h1 class="text-black p-4" style="font-size: 3rem">Formation
                     <i class="bi bi-mortarboard"></i>
                </h1>
                <!-- <hr class="text-rouge border-2"> -->
            </section>
        </div>
    </div>

    <main class="container">
        <section class="row g-3 p-4">
            <div class="border border bg-white shadow-sm rounded p-5">
                <a href="https://ozarhatorah.com/services-informatiques-aux-organisations/" target="_blank">
                    <img src="<?= BASE_URL ?>uploads/experience/logo_ozar_formation_concept_cinematique_3.jpg" 
                    alt="Photo logo Ozar Formation" class="img-fluid float-end ms-2 shadow-sm rounded-1" width="400rem">
                </a>
                <div>
                    <h3>BTS SIO Option SLAM [En cours...]</h3>
                    <h5 class="text-rouge">CFA Ozar Formation</h5>
                    <p class="text-justifier">Formation en Services Informatiques aux Organisations, spécialisation Solutions 
                        Logicielles et Applications Métiers. Apprentissage approfondi du développement 
                        web, de la gestion de bases de données et de la méthodologie de projet.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Titre Expérience Pro -->
     <div class="container-fluid">
         <div class="row drop-shadow">
             <section class="bg-projet-1">
                 <!-- <hr class="text-gris border-2"> -->
                 <h1 class="p-4 text-black" style="font-size: 3rem">Expérience professionnelle
                     <i class="bi bi-building"></i>
                </h1>
                <!-- <hr class="text-gris border-2"> -->
            </section>
        </div>
    </div>
    
    <!-- Contenu expérience pro -->
    <div class="container">        
        <section class="row g-3 p-4">            
            <div class="col-md-3">
                <div class="card rounded-4 shadow-sm "> 
                    <a href="https://hitecy.launchrock.com" target="_blank">
                        <img class="img-fluid border-bottom p-4" src="uploads\experience\hitecy.png" alt="">
                    </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="https://pro.orange.fr/p/distributeurs/hitecy" class="nav-link" target="_blank">
                                    Distributeur Orange</a>
                            </h5>
                            <p class="text-justifier">Hitecy group est un expert certifié Orange et est habilité à conseiller des clients et vendre des produits Orange.</p>
                            <p class="text-justifier">
                                Mon rôle consiste à analyser, répertorier et qualifier des données clients pour fidéliser ou identifier des prospects</p>
                        </div>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="card border-0 rounded  shadow-sm "> 
                    <img class="img-fluid" src="uploads\experience\.png" alt="">
                    <div class="card-body"> 
                        <p></p>
                    </div>
                </div>
            </div> -->
        </section>
    </div>
        
    <!-- Titre Compétences-->
     <div class="container-fluid">
         <div class="row drop-shadow">
             <section class="bg-projet-1">
                <!-- <hr class="text-vert border-2"> -->
                <h1 class="p-4 text-black" style="font-size: 3rem">Compétences techniques
                     <i class="bi-laptop"></i></h1>
                <!-- <hr class="text-vert border-2"> -->
            </section>
        </div>
    </div>
    
    <!-- Contenu Compétences -->
    <main class="container">
        <h1 class="py-5">Visitez les projets ci-dessous pour découvrir les technologies utilisées</h1>

        <!-- Ligne Portdolio (Reverse) -->
        <section class="row g-5 py-5 flex-md-row-reverse bg-projet-2">
            <div class="col-md-6">
                <h3>Site vitrine</h3>
                <h5>Portfolio de compétences</h5>
                <p class="text-justifier">Présentation (CV, formation, expérience, compétences), réalisations professionnelles (Activités, projets, etc.), veille technologique et sécurité (Recherche, thème, et articles pertinents)</p>
                <div class="tech-stack">
                    <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded m-1"> HTML</span>           
                    <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded m-1"> CSS</span>             
                    <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded m-1"> PHP</span>
                    <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded m-1"> Git</span>
                </div> 
            </div>
            <div class="col-md-6">
                <div class="">
                    <a href="https://costantini.freeboxos.fr/portfolio/" target="_blank" class="">
                        <img src="<?= BASE_URL ?>uploads/projets/portfolio.png" alt="" class="img-fluid projet shadow rounded-4">
                    </a>
                </div>
            </div>
        </section>

            <!-- Ligne GDM -->     
        <section class="row g-5 py-5 bg-projet-3">             
            <div class="col-md-6">
                <h3 class="">CMS pédagogique</h3>
                <h5>Gestion de contenu</h5>
                <p class="text-justifier">Il s'agit d'une application web permettant de créer, organiser, modifier et structurer du contenu pédagogique hiérarchisé.
                    Ce site a été conçu sur la base du programme du BTS SIO.
                </p>
                <div class="tech-stack">
                    <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded m-1"> HTML</span>           
                    <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded m-1"> CSS</span>             
                    <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded m-1"> PHP</span>
                    <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded m-1"> Git</span>
                </div> 
            </div>       
            <div class="col-md-6">
                <a id="start" href="https://costantini.freeboxos.fr/gdm/" target="_blank" class="">
                    <video class="img-fluid projet shadow rounded-4" autoplay muted loop playsinline>
                        <source src="<?= BASE_URL ?>uploads/videos/demo_gdm.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas le format de cette vidéo
                    </video>
                    <!-- <audio id="audio" src="<?= BASE_URL ?>uploads/audio/skyfall_beats-acies.mp3"></audio> -->
                </a>
                <div id="stop" class="bi bi-play-fill text-danger fs-1" style="cursor: pointer; display: none;"> 
                    <p class="fs-6">Cliquez pour arréter le son</p>
                </div>
            </div>
        </section>


        <!-- Ligne Chat (Reverse) -->
        <section class="row g-5 py-5 flex-md-row-reverse bg-projet-4">
            <div class="col-md-6">
                <h3>Application de messagerie instantanée</h3>
                <h5>Application web - Chat</h5>
                <p></p>
                <div class="tech-stack">
                    <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded m-1"> HTML</span>           
                    <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded m-1"> CSS</span>             
                    <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded m-1"> PHP</span>
                    <span class="devicon-mysql-plain colored bg-white shadow-sm border p-2 rounded m-1"> MySQL</span>
                    <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded m-1"> Git</span>
                </div>
            </div>              
            <div class="col-md-6">
                <a href="https://costantini.freeboxos.fr/chat/" target="_blank" class="">    
                    <img src="<?= BASE_URL ?>uploads/projets/chat.png" alt="" class="img-fluid projet shadow rounded-4">
                </a>
            </div>            
        </section>
       
        <!-- Ligne QCM -->
        <section class="row g-5 py-5 bg-projet-3">        
            <div class="col-md-6">
                <h3 class="">Application de QCM en ligne</h3>
                <p></p>
                <div class="tech-stack">
                    <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded m-1"> HTML</span>           
                    <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded m-1"> CSS</span>             
                    <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded m-1"> PHP</span>
                    <span class="devicon-mysql-plain colored bg-white shadow-sm border p-2 rounded m-1"> MySQL</span>
                    <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded m-1"> Git</span>
                </div>
            </div>
            <div class="col-md-6">
                <a href="https://costantini.freeboxos.fr/qcm/" target="_blank" class="">    
                    <img src="<?= BASE_URL ?>uploads/projets/qcm2.png" alt="" class="img-fluid projet shadow rounded-4">
                </a>
            </div>     
        </section>
        
        <!-- Ligne e-commerce (reverse) -->   
        <section class="row g-5 py-5 flex-md-row-reverse bg-projet-5">        
            <div class="col-md-6">
                <h3 class="">PPE 1 - Site e-commerce</h3>
                <p></p>
                <div class="tech-stack">
                    <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded m-1"> HTML</span>           
                    <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded m-1"> CSS</span>             
                    <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded m-1"> PHP</span>
                    <span class="devicon-mysql-plain colored bg-white shadow-sm border p-2 rounded m-1"> MySQL</span>
                    <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded m-1"> Git</span>
                </div>
            </div>      
            <div class="col-md-6">
                <a href="https://costantini.freeboxos.fr/projet-ecom/" target="_blank" class="">    
                    <img src="<?= BASE_URL ?>uploads/projets/ecom1.png" alt="" class="img-fluid projet shadow rounded-4">
                </a>
            </div>
        </section>
        <a href="<?= BASE_URL ?>ressources/cv/CV-YHC-fs14-ech85.pdf" download="CV_Yaacov_Costantini.pdf" 
        class="text-dark small text-decoration-none border border-dark border-2 rounded-1 p-2 bg-tertiary hvr-glow">
            <i class="bi bi-download"></i> Télécharger le CV en PDF
        </a>
    </main>
</div>

<script>
    document.getElementById("start").onclick = () => {
        document.getElementById("audio").play();
        document.getElementById("stop").style.display = "block";
    };
    document.getElementById("stop").onclick = () => {
        document.getElementById("audio").pause();
        audio.currentTime = 0;
        // document.getElementById("stop").style.display = "none";
    };

</script>
