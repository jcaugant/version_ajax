function openNav() {
document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

$(function () {

    $('#cherch_nom').click(function() {

      $('#carousel').load('modules.html #search_name', function() {

$('#mySidenav').css('width','0');
        
      });
    });


    $('#cherch_num').click(function() {
      $('#carousel').load('modules.html #search_number', function() {

        $('#mySidenav').css('width','0');
      });
    });

$('#suppr_resa').click(function() {
      $('#carousel').load('modules.html #suppr_number', function() {

        $('#mySidenav').css('width','0');
      });
    });

$('#resa_salle').click(function() {
      $('#carousel').load('accueil.html #carousel', function() {

        $('#mySidenav').css('width','0');
      });
    });

  });