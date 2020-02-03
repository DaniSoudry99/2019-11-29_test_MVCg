<?php require 'header.php'; ?>


<h1>Le produit</h1>

<h3>Détails du produit " <?php echo $leProduit['nom']; ?> "</h3>

<div class="info">
  <h5>Description :</h5>
  <div class="description">
    <?php echo $leProduit['description']; ?>
  </div>

  <div class="droite">
    <img src="<?php echo $leProduit['url_image']; ?>" width="300">
    <p><?php echo $leProduit['prix']." €"; ?></p>
  </div>
</div>

<?php require 'footer.php'; ?>
