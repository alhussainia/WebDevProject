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
    <h1>Pet Profiles</h1>
    <?PHP require("navbar.php");?>
</div>

<div>
    <div> 
    <h2> Pets On Campus</h2>
    <p> Here you can see all the pets that have had profiles created so far! </p>
    
    <h3> Cats: </h3>
    </div>

     <div class="floater" id ="profiles" style = "text-align: left; position: absolute;">
     <a href="../src/pets/angel.php"><div id = "Angel" class="floater">
            <a href="../src/pets/angel.php"><img src="../imgs/Angel.png" style="height:250px; width:200px; display:block; margin:auto;"> <p>Angel</p></a>
        </div></a>
    <a href="../src/pets/kyra.php"><div id = "Kyra" class="floater">
            <a href="../src/pets/kyra.php"><img src="../imgs/Kyra.jpg" style="height:250px; width:200px; display:block; margin:auto;"><p>Kyra</p></a>
        </div></a>
    <a href="../src/pets/spencer.php"><div id = "Spencer" class="floater">
        <a href="../src/pets/spencer.php"><img src="../imgs/Spencer.png" style="height:250px; width:200px; display:block; margin:auto;"><p>Spencer</p></a>
        </div></a>
    </div>   
    <div class="floater" style = "text-align: left; position: absolute; margin-top: 350px;">
       
    <h3>Dogs:</h3>

    <a href="../src/pets/moose.php"><div id = "Moose" class="floater"></a>
            <a href="../src/pets/moose.php"><img src="../imgs/moose.jpg" style="height:250px; width:200px; display:block; margin:auto;"> <p>Moose</p></a>
        </div>
    <a href="../src/pets/bubba.php"><div id = "Bubba" class="floater"></a>
            <a href="../src/pets/bubba.php"><img src="../imgs/bubba.JPEG" style="height:250px; width:200px; display:block; margin:auto;"> <p>Bubba</p></a>
        </div>
    <a href="../src/pets/remus.php"><div id = "Remus" class="floater"></a>
            <a href="../src/pets/remus.php"><img src="../imgs/remus.JPEG" style="height:250px; width:200px; display:block; margin:auto;"> <p>Remus</p></a>
        </div>
    </div>

<div class="floater" style = "text-align: left; position: absolute; margin-top: 700px;">       
<h3>Other Pets:</h3>

<?php
require_once("functions/database_functions.php");    
$pdo = connect_to_db();
$pets = $pdo->query("SELECT * FROM petProfile;");

foreach($pets as $pet) {
    echo "<a href='pets/pet.php?id=".$pet["petID"]."'>";
    echo "<div class='floater'>";
    echo '<img src="upload/'.$pet["petPic"].'" style="height:250px; width:200px; display:block;">';
    echo "<p><u>".$pet["petName"]."</u></p>";
    echo "</div></a>";
}
?>
<div name="spacer" style="height:100px; width:100%;" class="floater"></div>
</div>
    <footer style="position:fixed; bottom:0; width: 100%;">
        <p> Do you want to see your pet on this page? <a class="nav-item nav-link" href="petapplications.php">Click here</a> to fill out the form! </p>
    </footer>
</div>

</body>


</html>