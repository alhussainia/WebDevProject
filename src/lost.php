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
    <h1>Lost</h1>
    <?PHP require("navbar.php");?>
</div>
    <h2>Lost Pets</h2>
        <p>The purpose of this page is for pet owners to update information on their pets if they go missing to help find missing pets on campus.</p>
    </div>  

    <div>
        <h3> Lost Pets: </h3>
        </div>

<?PHP
require_once("functions/database_functions.php");    
$pdo = connect_to_db();
$pets = $pdo->query("SELECT * FROM lostPet;");

foreach($pets as $pet) {
    echo '<img src="upload/'.$pet["lostPic"].'" style="height:250px; width:200px; color: #004B98;">';
    echo '<div>Name: '.$pet["lostPetName"].' '.$pet["lostPetLastname"].' <BR>Lost: '.$pet["lastSeen"].' on '.$pet["missingDate"].'</div>';
}
?>

    <div>
        <h3> Lost Your Pet? </h3>
        <form method="POST" action="functions/process_form.php" enctype="multipart/form-data">
        <input type="hidden" name="formType" value="lost">
        Pet's Name: <input name="lostPetName" type="text"><BR/>
        Pet's Last Name: <input name="lostPetLastname" type="text"><BR/>
        Date Missing: <input name="missingDate" type = "text"><BR/>
        Last Seen Here: <input name="lastSeen" type="text"><BR/>
        Picture of Pet: <input type="file" id="lostPic" name="lostPic"
       accept="image/png, image/jpeg, image/heic"><BR/>
        <input type="submit" value="Submit">
        </form>

    </div>

    <footer>
    <p>If you have found someone's  pet, click <a class="nav-item nav-link" href="found.php">here</a> to submit a found report.</p>
    </footer>

</body>
</html>