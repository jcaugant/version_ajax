<!DOCTYPE html>
<html>
<head>
<meta charset="iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</head>

<body>

<div id="search_name">
<form action="#" method="post">
<div class="row justify-content-center">Entrez ici le nom &agrave; chercher :<input type="text" name="nom" id="nom"></div><br />
<div class="row justify-content-center"><button type="button" class="btn btn-dark" id="button" onclick="../js/result_name.js">Chercher</button>

</form>
</div>

</div>

<div id="search_number">
<form action="#" method="post">
<div class="row justify-content-center">Entrez ici le num&eacute;ro &agrave; chercher :<input type="text" name="number" id="number"></div><br />
<div class="row justify-content-center"><button type="button" class="btn btn-dark" id="button" onclick="../js/result_number.js">Chercher</button></div>

</form>
</div>

<div id="suppr_number">
<form action="#" method="post">
<div class="row justify-content-center">Entrez ici le num&eacute;ro de la r&eacute;servation &agrave; supprimer :<input type="text" name="number" id="number"></div><br />
<div class="row justify-content-center"><button type="button" class="btn btn-dark" id="button" onclick="../js/suppr_resa.js"></div>

</form>
</div>
     


</body>
</html>