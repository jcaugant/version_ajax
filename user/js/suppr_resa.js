$(document).ready(function(){


    $("#submit").click(function{


        $.post(

            'search.php', // Un script PHP que l'on va cr�er juste apr�s

            {

                name : $("#name").val()  // Nous r�cup�rons la valeur de nos inputs que l'on fait passer � connexion.php

            },


            function(data){ // Cette fonction ne fait rien encore, nous la mettrons � jour plus tard

            },


            'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !

         );


    });


});