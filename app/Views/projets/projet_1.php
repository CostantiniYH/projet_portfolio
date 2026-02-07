
<?php require_once dirname(__DIR__) . '/partials/navbar_projet.html'; ?>
<div class=" ">
    <h1 class="mb-5">Projet 1 - Gestionnaire de contacts</h1>
    <main class="shadow-sm p-5 bg-white rounded-1">
        <div class="p-3">
            <section id="presentation" class="row p-3">

            </section>

            <section id="cdc" class="row p-3">
                <h2 class="text-center text-primary mb-5">Expression du besoin</h2>                
                <article class="col-md text-break border-end">
                    <details>
                        <summary class="fs-5 fw-semibold">Contexte du sujet</summary>
                        <p>De nombreux petites structures <?= "(" ?>association, TPE, indépendants...<?= ")" ?> gèrent encore leurs contacts clients sur papier ou avec des fichiers dispersés
                        <?= "(" ?>Excel, notes, etc...<?= ")" ?>.</p>
                        <p>Cela entraîne :</p>
                        <ul>
                            <li>Des pertes d'informations</li>
                            <li>Des erreurs</li>
                            <li>Une gestion peu efficace</li>
                        </ul>
                    </details>    
                </article>
                <article class="col-md text-break ">
                    <details>
                        <summary class="fs-5 fw-semibold">Problème à résoudre</summary>
                        <p>Il y a 3 tâches sur lesquelles il faut se concentrer :</p>
                        <ul>
                            <li>Les informations des contacts ne sont pas centralisées</li>
                            <li>La recherche d'un contact est lente</li>
                            <li>La mise à jour des informations est difficile</li>
                        </ul>
                        <p>Le besoin est donc de créer une application simple, locale et intuitive permettant de gérer facilement des contacts à partir d'un seul logiciel.</p>
                    </details>    
                </article>
            </section>
            
            <section class="row p-3">
                <hr>
                <article class="col-md text-break border-end">
                    <details>
                        <summary class="fs-5 fw-semibold">Objectifs de l'application</summary>
                        
                        <p>L'objectif est de développer une application client lourd permettant à un utilisateur de :</p>
                        <ul>
                            <li>Enregistrer des contacts</li>
                            <li>Consulter la liste des contacts</li>
                            <li>Modifier les informations d'un contact</li>
                            <li>Supprimer un contact</li>
                            <li>Rechercher un contact</li>
                        </ul>
                        <p>L’application doit être :</p>                        
                        <ul>
                            <li>simple à utiliser</li>
                            
                            <li>installée sur le poste utilisateur</li>
                            
                            <li>reliée à une base de données locale</li>
                        </ul>
                    </details>
                </article>
                <article class="col-md text-break">      
                    <details>
                        <summary class="fs-5 fw-semibold">Utilisateur Cible</summary>
                        <p></p>
                        <ul>
                            <li>Employé d’une petite entreprise</li>
                            <li>Responsable d’une association</li>
                            <li>Utilisateur non technique </li>
                        </ul>
                        <p>L’application doit donc être intuitive et facile à prendre en main.</p>
                    </details>          
                </article>
            </section>
                
            <section class="row p-3">
                <hr>
                <article class="col-md text-break border-end">          
                    <details>
                        <summary class="fs-5 fw-semibold">Périmètre fonctionnel</summary>
                        <h5>Fonctionnalités incluses</h5>
                        <ul>
                            <li>Ajout d'un contact</li>
                            <li>Modification d'un contact</li>
                            <li>Suppression d'un contact</li>
                            <li>Affichage de tous les contacts</li>
                            <li>Recherche par nom ou prénom</li>
                        </ul>
                        
                        <h5>Fonctionnalités exclues</h5>
                        <ul>
                            <li>Gestion des droits utilisateurs</li>
                            <li>Synchroniation en ligne</li>
                            <li>Export PDF ou excel</li>
                            <li>Authentification</li>
                        </ul>
                    </details>      
                </article>
                <article class="col-md text-break">  
                    <details>
                        <summary class="fs-5 fw-semibold">Contraintes</summary>
                        <h5>Techniques</h5>
                        <ul>
                            <li>Application développée en Python</li>
                            <li>Interface graphique en Tkinter</li>
                            <li>Base de données SQlite</li>
                            <li>Fonctionnement hors ligne</li>
                        </ul>
                        <h5>Organisationnelles</h5>
                        <ul>
                            <li>Projet pédagogique</li>
                            <li>Application simple et démonstrative</li>
                            <li>Délais courts</li>
                        </ul>
                    </details>
                </article>
            </section>
            
            <section class="row p-3 text-break">   
                <hr>          
                <article>
                    <h4 class="text-center">Résultat attendu</h4>
                    <p>A la fin du projet, l'utilisateur doit pouvoir :</p>
                    <ul>
                        <li>Gérer ses contacts depuis une nterface graphique</li>
                        <li>Retrouver rapidement une information</li>
                        <li>Conserver les données entre deux utilisations de l'application</li>
                    </ul>
                    <p>Pour télécharger le cahier des charges cliquez ici : 
                        <a href="/ressources/documentation/Projet_1-cahier_des_charges.pdf" target="_blank" class="fs-4 bi bi-download btn btn-primary"></a>
                    </p>
                </article>   
            </section>

             <!-- <section class="row p-3 text-break">   
                <hr>          
                <article class="col-md">
                    <h4 class="text-center"></h4>
                    <video class="col-12" width="" height="auto" controls>
                        <source type="video/mp4" src="<?= BASE_URL ?>uploads/videos/Enregistrement 2026-01-14 000726.mp4">
                    </video>
                </article>   
            </section> -->
        </div> 
        <section id="diagrammes">
            <h2 class="text-center text-primary mb-5">Diagrammes & Modélisation</h2>
            <p>MCD, UML, schéma de base de données...</p>
        </section>

        <section id="dev">
            <h2 class="text-center text-primary mb-5">Développement</h2>
            <p>Technos utilisées, organisation du code...</p>
        </section>

        <section id="tests">
            <h2 class="text-center text-primary mb-5">Tests & Validation</h2>
            <p>Cas de tests, bugs rencontrés, solutions...</p>
        </section>

        <section id="bilan">
            <h2 class="text-center text-primary mb-5">Bilan</h2>
            <p>Ce que j'ai appris, difficultés, améliorations futures...</p>
        </section>       
    </main>
</div>