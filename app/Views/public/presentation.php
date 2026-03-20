<header class="bg-blue  text-white p-5 mb-5">
    <a href="" class="cv-brand float-end">CV</a>
    <h1>Yaacov Costantini</h1>
    <p>Développeur polyvalent</p>
    <p>Etudiant en alternance passioné par la création et la découverte d'expérience numériques</p>
</header>
<div class="">


    <section class="container">
        <div class="row p-5">            
            <h1 class="text-center">Bienvenue</h1>
        </div>
    </section>
    
    <!-- Titre Formation -->
     <div class="drop-shadow">
        <section class="bg-projet-1">
            <hr class="text-rouge border-2">
            <h1 class="text-black p-4" style="font-size: 3rem">Formation
                <i class="bi bi-mortarboard"></i>
            </h1>
            <hr class="text-rouge border-2">
        </section>
    </div>

    <main class="container">
        <section class="row g-3 p-4">
            <div class="border border bg-white shadow-sm rounded p-5">
                <h3>BTS SIO Option SLAM [En cours...]</h3>
                <h5 class="text-rouge">CFA Ozar Formation</h5>
                <p class="text-justifier">Formation en Services Informatiques aux Organisations, spécialisation Solutions 
                    Logicielles et Applications Métiers. Apprentissage approfondi du développement 
                    web, de la gestion de bases de données et de la méthodologie de projet.</p>
            </div>
        </section>
    </main>

    <!-- Titre Expérience Pro -->
     <div class="drop-shadow">
        <section class="bg-projet-1">
            <hr class="text-gris border-2">
            <h1 class="p-4 text-black" style="font-size: 3rem">Expérience professionnelle
                <i class="bi bi-building"></i>
            </h1>
            <hr class="text-gris border-2">
        </section>
    </div>
    
    <!-- Contenu expérience pro -->
    <div class="container">        
        <section class="row g-3 p-4">            
            <div class="col-md-3">
                <div class="card rounded-4 shadow-sm "> 
                    <img class="img-fluid border-bottom p-4" src="uploads\experience\hitecy.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">DVI d'Orange</h5>
                        <p>Analyse et qualification des données clients</p>
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
     <div class="drop-shadow">
         <section class="bg-projet-1">
             <hr class="text-vert border-2">
             <h1 class="p-4 text-black" style="font-size: 3rem">Compétences techniques
                 <i class="bi-laptop"></i></h1>
            <hr class="text-vert border-2">
        </section>
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
                    <img src="<?= BASE_URL ?>uploads/projets/ecom.png" alt="" class="img-fluid projet shadow rounded-4">
                </a>
            </div>
        </section>
    </main>
</div>

<script>
    document.getElementById("start").onclick = () => {
        document.getElementById("audio").play();
        document.getElementById("stop").style.display = "block";
    };
    document.getElementById("stop").onclick = () => {
        document.getElementById("audio").pause();
        // document.getElementById("stop").style.display = "none";
    };

</script>





<!-- <ul class="list-group">               
    <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> HTML
        <div class="progress mt-2" style="height: 15px;">
            <div class="progress-bar bg-success fs-7" style="width: 85%;">85%</div>
        </div>
    </li>
    <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> CSS
        <div class="progress mt-2" style="height: 15px;">
            <div class="progress-bar bg-success fs-7" style="width: 75%;">75%</div>
        </div>
    </li>
    <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> PHP
        <div class="progress mt-2" style="height: 15px;">
            <div class="progress-bar bg-success fs-7" style="width: 75%;">75%</div>
        </div>
    </li>      
    <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> MySQL
        <div class="progress mt-2" style="height: 15px;">
            <div class="progress-bar bg-success fs-7" style="width: 50%;">50%</div>
        </div>
    </li>      
    <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Git
    <div class="progress mt-2" style="height: 15px;">
            <div class="progress-bar bg-success fs-7" style="width: 40%;">40%</div>
        </div>
    </li>      
    <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Java
        <div class="progress mt-2" style="height: 15px;">
            <div class="progress-bar bg-success fs-7" style="width: 40%;">40%</div>
        </div>
    </li>      
    <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> Python            
        <div class="progress mt-2" style="height: 15px;">
            <div class="progress-bar bg-success" style="width: 30%">30%</div>
        </div>
    </li>      
    <li class="list-group-item"><i class="bi bi-check-circle text-success"></i> JavaScript
        <div class="progress mt-2" style="height: 15px;">
            <div class="progress-bar bg-success fs-7" style="width: 10%;">10%</div>
        </div>
    </li>      
</ul> -->