<?php require_once dirname(__DIR__) . '/partials/navbar_projet.html'; ?>
<div class="gradient container">
    <h1 class="mb-5">Projet 1 - Gestionnaire de contacts</h1>
    <main class="shadow-sm p-4 bg-white rounded-1">        
        <div  class="row p-3 border-start border-end border-top border-2 border-primary rounded-top-1">
            <h3 class="text-center text-primary">Expression du besoin</h3>
            
            <div class="col-md text-break border-end">
                <h4>Contexte du sujet</h4>
                <p>De nombreux petites structures <?= "(" ?>association, TPE, indépendants...<?= ")" ?> gèrent encore leurs contacts clients sur papier ou avec des fichiers dispersés
                <?= "(" ?>Excel, notes, etc...<?= ")" ?>.</p>
                <p>Cela entraîne :</p>
                <ul>
                    <li>Des pertes d'informations</li>
                    <li>Des erreurs</li>
                    <li>Une gestion peu efficace</li>
                </ul>
            </div>
            <div class=" col-md p-3 text-break ">
                <h4>Problème à résoudre</h4>
                <p>Il y a 3 tâches sur lesquelles il faut se concentrer :</p>
                <ul>
                    <li>Les informations des contacts ne sont pas centralisées</li>
                    <li>La recherche d'un contact est lente</li>
                    <li>La mise à jour des informations est difficile</li>
                </ul>
                <p>Le besoin est donc de créer une application simple, locale et intuitive permettant de gérer facilement des contacts à partir d'un seul logiciel.</p>
            </div>            
        </div>
        <details>
            <summary>Voir le cahier des charges plus en détail</summary>
        
        <div class="row p-3 border-start border-end border-2 border-primary">
            <hr>
            <div class="col-md text-break border-end">
                <h4>Objectifs de l'application</h4>
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
            </div>
            <div class="col-md text-break">                
                <h4>Utilisateur Cible</h4>
                <p></p>
                <ul>
                    <li>Employé d’une petite entreprise</li>
                    <li>Responsable d’une association</li>
                    <li>Utilisateur non technique </li>
                </ul>
                <p>L’application doit donc être intuitive et facile à prendre en main.</p>
            </div>
        </div>

        <div class="row p-3 border-start border-end border-2 border-primary">
            <hr>
            <div class="col-md text-break border-end">                
                <h4>Périmètre fonctionnel</h4>
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
            </div>
            <div class="col-md text-break">  
                <h4>Contraintes</h4>
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
            </div>
        </div>
        
        <div class="row p-3 text-break border border-top-0 border-2 border-primary rounded-bottom-1">   
            <hr>          
            <div>
                <h4 class="text-center">Résultat attendu</h4>
                <p>A la fin du projet, l'utilisateur doit pouvoir :</p>
                <ul>
                    <li>Gérer ses contacts depuis une nterface graphique</li>
                    <li>Retrouver rapidement une information</li>
                    <li>Conserver les données entre deux utilisations de l'application</li>
                </ul>
            </div>   
        </div>
    </details>
    </main>
</div>