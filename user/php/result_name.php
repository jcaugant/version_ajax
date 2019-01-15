<?php include("header.php"); ?>
<?php include("connect.php"); ?>

<!-- Menu à gauche -->

<?php include("menu.php"); ?>

<script src="../js/default_script.js"></script>

<?php

$req = $bdd->prepare('SELECT id, nom, salle, date, heure_arriv, heure_dep, nb_etud FROM resa WHERE nom = ? ');

$req->execute(array($_POST['name'] ));

while ($donnees = $req->fetch())

?>

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">N&deg; de r&eacute;servation</th>
      <th scope="col">Nom</th>
      <th scope="col">N&deg; de salle</th>
      <th scope="col">Date de r&eacute;servation</th>
      <th scope="col">Heure d'arriv&eacute;e</th>
      <th scope="col">Heure de d&eacute;part</th>
      <th scope="col">Nombre de personnes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php . $donnees['id'] ?></th>
      <td><?php . $donnees['nom'] ?></td>
      <td><?php . $donnees['salle'] ?></td>
      <td><?php . $donnees['date'] ?></td>
      <td><?php . $donnees['heure_arriv'] ?></td>
      <td><?php . $donnees['heure_dep'] ?></td>
      <td><?php . $donnees['nb_etud'] ?></td>
    </tr>
</tr>
  </tbody>
</table>


<?php

$req->closeCursor();
     
?>
<?php include("footer.php"); ?>