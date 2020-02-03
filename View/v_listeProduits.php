<?php require 'header.php'; ?>

<h1>Les produits</h1>

<h3>Liste des produits</h3>

<div class="info">
  <table class="table table-hover" style="width:80%;">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>prix</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

        foreach ($tblProduit as $p)
        {
          ?>
          <tr>
            <td><?php echo $p['nom']; ?></td>
            <td><?php echo $p['description']; ?></td>
            <td><?php echo $p['prix']."€"; ?></td>
            <td><a href="../controller/c_detailProduit.php?id=<?php echo $p['id']; ?>">Détails</a></td>
          </tr>
          <?php
        }

      ?>
    </tbody>
  </table>

</div>


<?php require 'footer.php'; ?>
