<?php

  $pass = 'root';

  try {
    $cnx = new PDO('mysql:host=localhost; dbname=bdd_test_mvc; charset=UTF8', 'root', $pass);
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }

 ?>
