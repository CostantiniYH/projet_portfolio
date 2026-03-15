<header class="bg-blue  text-white p-5 mb-5">
    <a href="" class="cv-brand float-end">CV</a>
    <h1>Yaacov Costantini</h1>
    <p>Développeur polyvalent</p>
    <p>Etudiant en alternance passioné par la création et la découverte d'expérience numériques</p>
</header>
<div class="container-fluid">


    <main class="container">
        <section class="row">
            <h1 class="text-center">Bienvenue</h1>
        </section>

        <section class="row gap-3 mb-4">
            <hr class="text-rouge border-2">
            <h1 class="mb-4 text-primary bi bi-mortarboard text-black" style="font-size: 3rem"> Etudes</h1>
            <hr class="text-rouge border-2">

            <div class="bg-white shadow-sm rounded p-5">
                <h3>BTS SIO Option SLAM [En cours...]</h3>
                <h5 class="text-rouge">CFA Ozar Formation</h5>
                <p class="text-justifier">Formation en Services Informatiques aux Organisations, spécialisation Solutions 
                    Logicielles et Applications Métiers. Apprentissage approfondi du développement 
                    web, de la gestion de bases de données et de la méthodologie de projet.</p>
            </div>
        </section>

        
        <section class="row gap-3 mb-4">
            <hr class="text-gris border-2">
            <h1 class="mb-4 text-primary bi bi-buildings text-black" style="font-size: 3rem"> Expérience professionnelle</h1>
            <hr class="text-gris border-2">
            <div class="bg-white shadow-sm rounded p-3">
                <div class="card border-0"> 
                    <img class="card-img-top img-fluid float-start w-25 " src="uploads\experience\hitecy.png" alt="">
                    <div class="card-body"> 
                        <p>Analyse et qualification des données clients</p>
                    </div>
                </div>

                <picture>

                </picture>
            </div>
        </section>
        
        <!-- Section Compétences -->
        <section class="row g-3 mb-4">
            <!-- Titre -->
            <hr class="text-vert border-2">
            <h1 class="mb-4 text-primary bi bi-person-gear text-black" style="font-size: 3rem"> Compétences techniques</h1>
            <hr class="text-vert border-2">
            <h2>Visitez les projets ci-dessous pour découvrir les technologies utilisées</h2>
            
            <div class="row g-4 align-items-center flex-md-row-reverse p-5">
                <!-- Ligne Portdolio -->
                <div class="col-md-6">
                    <h4>Portfolio professionnel</h4>
                    <p>Site web sécurisé et accessible depuis internet</p>
                    <div class="tech-stack">
                        <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded"> HTML</span>           
                        <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded"> CSS</span>             
                        <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded"> PHP</span>
                        <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded"> Git</span>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="">
                        <a href="https://costantini.freeboxos.fr/portfolio/" target="_blank" class="">
                            <img src="<?= BASE_URL ?>uploads/projets/portfolio.png" alt="" class="img-fluid projet shadow rounded-4">
                            <h5 class=""></h5>
                        </a>
                    </div>
                </div>

                <!-- Ligne GDM -->            
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
                <div class="col-md-6">
                    <h5 class="">Application de gestion des matières SIO</h5>
                    <p>Site web sécurisé et accessible depuis internet</p>
                    <div class="tech-stack">
                        <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded"> HTML</span>           
                        <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded"> CSS</span>             
                        <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded"> PHP</span>
                        <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded"> Git</span>
                    </div> 
                </div>

                <!-- Ligne e-commerce -->   
                <div class="col-md-6">
                    <h5 class="">PPE 1 - Site e-commerce</h5>
                    <p></p>
                    <div class="tech-stack">
                        <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded"> HTML</span>           
                        <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded"> CSS</span>             
                        <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded"> PHP</span>
                        <span class="devicon-mysql-plain colored bg-white shadow-sm border p-2 rounded"> MySQL</span>
                        <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded"> Git</span>
                    </div>
                </div>      
                <div class="col-md-6">
                    <a href="https://costantini.freeboxos.fr/projet-ecom/" target="_blank" class="">    
                        <img src="<?= BASE_URL ?>uploads/projets/ecom.png" alt="" class="img-fluid projet shadow rounded-4">
                    </a>
                </div>

                <!-- Ligne Chat -->
                <div class="col-md-6">
                    <a href="https://costantini.freeboxos.fr/chat/" target="_blank" class="">    
                        <img src="<?= BASE_URL ?>uploads/projets/chat.png" alt="" class="img-fluid projet shadow rounded-4">
                    </a>
                </div>
                <div class="col-md-6">
                    <h5>Site chat instantané</h5>
                    <p></p>
                    <div class="tech-stack">
                        <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded"> HTML</span>           
                        <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded"> CSS</span>             
                        <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded"> PHP</span>
                        <span class="devicon-mysql-plain colored bg-white shadow-sm border p-2 rounded"> MySQL</span>
                        <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded"> Git</span>
                    </div>
                </div>

                <!-- Ligne QCM -->
                <div class="col-md-6">
                    <h5 class="">Site QCM</h5>
                    <p></p>
                    <div class="tech-stack">
                        <span class="devicon-html5-plain colored bg-white shadow-sm border p-2 rounded"> HTML</span>           
                        <span class="devicon-css3-plain colored bg-white shadow-sm border p-2 rounded"> CSS</span>             
                        <span class="devicon-php-plain colored bg-white shadow-sm border p-2 rounded"> PHP</span>
                        <span class="devicon-mysql-plain colored bg-white shadow-sm border p-2 rounded"> MySQL</span>
                        <span class="devicon-git-plain colored bg-white shadow-sm border p-2 rounded"> Git</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="https://costantini.freeboxos.fr/qcm/" target="_blank" class="">    
                        <img src="<?= BASE_URL ?>uploads/projets/qcm2.png" alt="" class="img-fluid projet shadow rounded-4">
                    </a>
                </div>     
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