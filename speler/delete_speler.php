<?php

//kijkt of er een id is.
if(isset($_GET['speler_spelerID'])){

    include '../database.php';
    $db = new database();
    //sql statment om het te deleten
    $sql = "DELETE FROM speler WHERE spelerID =:spelerID ";

    $placeholders = [
        'spelerID'=>$_GET['speler_spelerID']
    ];

    //roept de delete functie aan in de database
    $db->update_or_delete($sql, $placeholders , 'speler.php');
}

?>