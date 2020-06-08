<?php
/*
  ./app/controleurs/pagesControleur.php
  C'est un ensemble de fonctions nommées Actions
  Hydrater les zones dynamiques du template ($content)
*/

namespace App\Controleurs\Posts;
use \App\Modeles\Posts;

function indexAction(\PDO $connexion) {
  // 1. On demande les produits au modèle que l'on met dans $produits
    include_once '../app/modeles/postsModele.php';
    $posts = Posts\findAll($connexion);

  // 2. On charge la vue index dans $content
    GLOBAL $title, $content;
    $title = "Liste des posts";
    ob_start();
      include '../app/vues/posts/index.php';
    $content = ob_get_clean();
}
