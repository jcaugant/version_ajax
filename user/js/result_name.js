$(document).ready(function(){


    $("#button").click(function{


        $.post(

            'search_result_name.php', // Un script PHP que l'on va cr�er juste apr�s

            {

                name : $("#nom").val()  // Nous r�cup�rons la valeur de nos inputs que l'on fait passer � search.php

            },


            function(){ // Cette fonction ne fait rien encore, nous la mettrons � jour plus tard

$('#champ').load('search_result_name.php #result_name', function() {
      
      });

            },


            'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !

         );


    });


});