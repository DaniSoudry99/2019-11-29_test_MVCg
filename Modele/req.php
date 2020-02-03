<?php

  function getAllProduit()
  {
    include '../modele/cnx.php';
    $selectProduit = $cnx->query("SELECT `id`, `nom`, `description`, `url_image`, `prix` FROM `produit`");
    $tblProduit = $selectProduit->fetchAll();

    return $tblProduit;
  }

  function getLeProduit($id)
  {
    include '../modele/cnx.php';
    $selectProduit = $cnx->query("SELECT `id`, `nom`, `description`, `url_image`, `prix` FROM `produit` WHERE `id` = $id");
    $leProduit = $selectProduit->fetch();

    return $leProduit;
  }

 ?>
