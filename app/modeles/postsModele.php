<?php
/*
-------------------------------------
    ../app/modeles/produitsModele.php
-------------------------------------
*/

namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM posts
          ORDER BY created_at ASC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC); // Tableau indexé de tableaux associatifs
}
