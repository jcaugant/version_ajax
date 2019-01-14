<!DOCTYPE html>
<html>
<head>
<meta charset="iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

</head>

<body>
<form>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Page de connexion &agrave; 
l'interface Administrateur du syst&egrave;me de r&eacute;servation de salles</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>S&eacute;lectionner une BU</option>
        <option value="droit">BU Droit</option>
        <option value="dubois">BU Bernard-Dubois</option>
        <option value="lettres">BU Fenouill&egrave;res</option>
        <option value="luminy">Learning Center de Luminy</option>
        <option value="st-charles">BU Saint-Charles</option>
        <option value="timone">BU Timone</option>
      </select>
    <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
    <label class="custom-control-label" for="customControlInline">Remember my preference</label>
  </div>

  <button type="submit" class="btn btn-primary my-1">Submit</button>
</form>
</body>
</html>