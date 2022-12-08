<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head> 
    
<body>

    <div>
    <a href=index.php><img src="../imgs/new_pet_logo-removebg.png" alt="logo" id="logo" style="float:left; position: rleative; margin-top: -20px; height: 150px; width: 200px;"><a>
    <h1>Elizabethtown College's Pet Profiles</h1>
    <?PHP require("navbar.php");?>
    </div>

<div class= 'center'>  <h1>Search Results</h1> </div>

<?php
$data=$_POST["term"];

include "functions/database_functions.php";
$pdo = connect_to_db();
$sql = "SELECT * FROM petProfile where petName LIKE :term ORDER BY petName";
$stmt = $pdo->prepare($sql);
$params = [":term"=>"%".$data."%"];

$stmt->execute($params);
$pets = $stmt->fetchAll();
 

echo "<div class= 'center'>";

/*foreach($pets as $pet){

    echo "<a href='pets/pet.php?id=".$pet["petID"]."'>";

    echo $pet["petName"];

    echo "</a> ";

    echo "<BR>";

}*/
global $GCLOUD;
foreach($pets as $pet) {
    echo "<a href='pets/pet.php?id=".$pet["petID"]."'>";
    echo "<div class='floater'>";
    echo '<img src="'.($GCLOUD ? '../imgs/pet_profiles_no_background.png' : 'upload/'.$pet["petPic"]).'" style="height:250px; width:200px; display:block;">';
    echo "<p><u>".$pet["petName"]."</u></p>";
    echo "</div></a>";
}

echo "</div>";
?>
<div name="spacer" style="height:100px; width:100%;" class="floater"></div>
</div>
    <footer style="position:fixed; bottom:0; width: 100%;">
        <p> Do you want to see your pet on this page? <a class="nav-item nav-link" href="petapplications.php">Click here</a> to fill out the form! </p>
    </footer>
</div>