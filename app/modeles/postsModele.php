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
          WHERE MONTH (created_at)
          ORDER BY id ASC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC); // Tableau indexé de tableaux associatifs
}
