<?php

//kijkt of er een id is.
if(isset($_GET['schaakvereniging_verenigingID'])){

    include '../database.php';
    $db = new database();
    //sql statment om het te deleten
    $sql = "DELETE FROM schaakvereniging WHERE verenigingID =:verenigingID ";

    $placeholders = [
        'verenigingID'=>$_GET['schaakvereniging_verenigingID']
    ];

    //roept de delete functie aan in de database 
    $db->update_or_delete($sql, $placeholders , 'schaakvereniging.php');
}

?>