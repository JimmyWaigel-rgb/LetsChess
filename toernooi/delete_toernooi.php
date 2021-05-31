<?php

//kijkt of er een id is.
if(isset($_GET['toernooi_toernooiID'])){

    include '../database.php';
    $db = new database();
    //sql statment om het te deleten
    $sql = "DELETE FROM toernooi WHERE toernooiID =:toernooiID ";

    $placeholders = [
        'toernooiID'=>$_GET['toernooi_toernooiID']
    ];

    //roept de delete functie aan in de database
    $db->update_or_delete($sql, $placeholders , 'toernooi.php');
}

?>