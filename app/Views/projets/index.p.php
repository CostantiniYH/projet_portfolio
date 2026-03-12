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


    <section class="row g-5 mt-5">
        <div class="col-md">
            <div class="card p-0 border-0 shadow position-relative">
                <img class="img-filtre img-fluid" src="<?= BASE_URL ?>uploads/projets/client_leger.png" alt="">
                <div class="position-absolute text-white top-50 start-50 translate-middle">
                    <h4 class="">Projet 1</h4>
                    <h5>CLient léger PHP</h5>
                </div>
                <a href="#projet_1" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-md">
            <div class="card h-100 border-0 shadow p-0 position-relative">
                <img class="img-filtre img-fluid" src="<?= BASE_URL ?>uploads/projets/java.png" alt="">
                <div class="position-absolute text-white top-50 start-50 translate-middle">
                    <h4 class="">Projet 2</h4>
                    <h5>Client lourd Java</h5>
                </div>
                <a href="#projet_2" class="stretched-link"></a>
            </div>
        </div>
    </section> 
</div>