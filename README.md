Ce code est un site vitrine professionnel destiné à promouvoir le travail d'un développeur

Une Conception peut s'avérer utile dans la mesure où elle définit les différentes parties du site, la maquette, la structure et le style. Pas besoin de définir des cas d'utilisation puisqu'il n'y a pas de programmation.
Le site contient donc 8 rubriques : 
Presentation, Realisations, E5, E6, Cybersecurite, Veille technologique, Contact, A Propos
La possiblité et l'intérêt de se connecter est pour l'instant limité à des affichages conditionnels destinés
à l'administrateur du site.

La Modélisation n'est pas nécessaire ici comme indiquait plus haut.

Le développement du site s'est fait sur la base d'une architecture MVC avec des ajustements au niveau des routeurs, middlewares, et des routes.

L'utilisation du gestionnaire de paquet Composer a été utile pour la configuration de la norme PSR-4 qui résout bien les namespaces, ainsi que pour la dépendance phphdotenv permettant d'intégrer des variables d'environnement dans le .env et évitant ainsi d'exposer des informations sensibles. Il a par ailleurs, été utilisé dans le cadre de test unitaire via la dépendance PHPUnit

Le Framework CSS Bootstrap a été aussi très utile pour faciliter les mises en page et les classes redondantes ou personnalisables.


