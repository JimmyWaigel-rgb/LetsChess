<?php
//index.php

// include the database class
include "../database.php";

require_once('../header.php');
//CHECK of er een verzoek is van de server.
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //check de field corect zijn.
    $fields = ['toernooi'];

    $error = false;

    foreach($fields as $field){
        if(!isset($_POST[$field]) || empty($_POST[$field])){
         $error = true;
    }
}

if(!$error){
    // store posted form values in variables
    $toernooi= $_POST['toernooi'];


        
    $database = new database();
    //function om het in de database toevoegen.
    $database->toernooi_toevoegen($toernooi);
 }
}
$database = new database();
//haalt data uit de database om in het form te displayen
$vereniging = $database->select("SELECT verenigingID, naam FROM schaakvereniging", []);
?>

<body>
<div class="container-fluid"><br>
        <div class="row">
            <div class="col-7">
                <img class="img-fluid blur" style="float: left;" src="../images/Chess.jpg" alt="toernooi">
            </div>

        <div class="col-3 ruimte border shadow p-3 mb-5 bg-white rounded registreer">
        
            <form class="form-signin" action="toernooi_toevoegen.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">toernooi Toevoegen</h1>

                <label for="toernooi">toernooi</label>
                <input type="text" name="toernooi" class="form-control" required="">
                <br>
                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="submit">
            </form>
            <br>
            <button type="button" class="btn btn-primary btn-lg btn btn-light"><a href="toernooi.php">terug</a></button>
        </div>
    </div>
</div>  
</body>
