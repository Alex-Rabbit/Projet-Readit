<?php
/*
-----------------------------------
    ../app/vues/produits/index.php
    Liste des produits
    Variables disponibles:
        -$produits ARRAY(ARRAY(id, nom))
-----------------------------------
*/
?>
<h2>Liste des posts</h2>
<ul>
  <?php foreach ($posts as $post): ?>
    <li>
      Titre du post : <?php echo $post['title'] ?> <br />
      Résumé du post : <?php echo $post['resume'] ?> <br />
      Date du post : <?php echo $post['created_at'] ?><br />
      <a href="?postID=<?php echo $post['id'] ?>"> Read more
      </a>
    </li>
  <?php endforeach; ?>
</ul>
