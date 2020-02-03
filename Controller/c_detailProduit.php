<?php

  require '../modele/req.php';
  $idProduit = $_GET['id'];
  $leProduit = getLeProduit($idProduit);
  require '../View/v_detailProduit.php';

?>
