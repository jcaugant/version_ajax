<?php

try

{

    // On se connecte � MySQL

    $bdd = new PDO('mysql:host=localhost;dbname=resa-salle;charset=utf8', 'user-resa', 'resa-user',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch(Exception $e)

{

    // En cas d'erreur, on affiche un message et on arr�te tout

        die('Erreur : '.$e->getMessage());

}

?>