<?php 

include("connect.php");

if( isset($_POST['nom']) ){

$req = $bdd->prepare('SELECT id, prenom, nom, salle, date, heure_arriv, heure_dep, nb_etud WHERE nom = ? ');

$req->execute(array($_POST['nom'] ));

    }

$id= $req['id'];
$prenom = $req['prenom'];
$nom = $req['nom']; 
$salle = $req['salle']; 
$date = $req['date']; 
$heure_arriv = $req['heure_arriv'];
$heure_dep = $req['heure_dep'];
$nb_etud = $req['nb_etud'];



?>
<div id="result_name">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">N&deg; r&eacute;s.</th>
      <th scope="col">Pr&eacute;nom</th>
      <th scope="col">Nom</th>
      <th scope="col">Salle</th>
      <th scope="col">Date</th>
      <th scope="col">Heure d'arriv&eacute;</th>
      <th scope="col">Heure de d&eacute;part</th>
      <th scope="col">Nombre de personnes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $id ?></th>
      <td><?php echo $prenom ?></td>
      <td><?php echo $nom ?></td>
      <td><?php echo $salle ?></td>
      <td><?php echo $date ?></td>
      <td><?php echo $heure_arriv ?></td>
      <td><?php echo $heure_dep ?></td>
      <td><?php echo $nb_etud ?></td>

    </tr>
  </tbody>
</table>
</div>
