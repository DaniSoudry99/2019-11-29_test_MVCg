<?php

  require '../modele/req.php';
  $tblProduit = getAllProduit();
  require '../View/v_listeProduits.php';

?>
