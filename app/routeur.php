<?php
/*
    ./app/routeur.php
    Le routeur charge le  controleur et lance l'action qui  correspond
    à ce qui se passe dans l'URL
*/

// ROUTE PAR DEFAUT: Liste des posts
// PATTERN: /
// CTRL: postsControleur
// ACTION: index

   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\Posts\indexAction($connexion);
