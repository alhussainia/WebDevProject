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
    <h1>Found</h1>
    <?PHP require("navbar.php");?>
</div>

    <div>
        <h2>Found Pets</h2>
        <p>The purpose of this page is for students to report any found and caught animals on campus.</p>
    </div>

        <div>
        <h3> Found Pets: </h3>
        </div>

<?PHP
require_once("functions/database_functions.php");    
$pdo = connect_to_db();
$pets = $pdo->query("SELECT * FROM foundPet;");
global $GCLOUD;

foreach($pets as $pet) {
    echo "<div class='floater' style='text-align: center'>";
    echo '<img src="'.($GCLOUD ? '../imgs/pet_profiles_no_background.png' : 'upload/'.$pet["foundPic"]).'" style="height:250px; width:200px; color: #004B98;">';
    echo '<div><strong>Name:</strong> '.$pet["foundPetName"].'<br> <strong>Description:</strong> '.$pet["foundPetDescription"].' <br> <strong>Location Found:</strong> '.$pet["locationFound"].'<br> <strong>Date Found:</strong>'.$pet["foundDate"].'</div>';
    echo "</div>";
}
?>
    
        <div style="text-align:left;  position: absolute; bottom: 10px; width: 50%;">
        <h3> Did you find a pet? </h3>
        <form method="POST" action="functions/process_form.php" enctype="multipart/form-data">
        <input type="hidden" name="formType" value="found">
        Pet's Name: <input name="foundPetName" type="text"><BR/>
        Pet's Description: <input name="foundPetDescription" type="text"><BR/>
        Date Found: <input name="foundDate" type="text"><BR/>
        Location Found:  <input name="locationFound" type="text"><BR/>
        Picture of Pet: <input type="file" id="foundPic" name="foundPic"
       accept="image/png, image/jpeg, image/heic"><BR/>
        <input type="submit" value="Submit">
        </form>

    </div>
    </div>

    <footer>
        <p>If you have lost your pet, click <a class="nav-item nav-link" href="lost.php">here</a> to submit a lost report.<p>
</footer>


</body>

</html>