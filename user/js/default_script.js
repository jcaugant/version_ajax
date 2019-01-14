function openNav() {
document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

$(function () {

    $('#cherch_nom').click(function() {

      $('#carousel').load('../php/modules.php #search_name', function() {

$('#mySidenav').css('width','0');
        
      });
    });


    $('#cherch_num').click(function() {
      $('#carousel').load('../php/modules.php #search_number', function() {

        $('#mySidenav').css('width','0');
      });
    });

$('#suppr_resa').click(function() {
      $('#carousel').load('../php/modules.php #suppr_number', function() {

        $('#mySidenav').css('width','0');
      });
    });

$('#resa_salle').click(function() {
      $('#carousel').load('../php/accueil.php #carousel', function() {

        $('#mySidenav').css('width','0');
      });
    });

  });