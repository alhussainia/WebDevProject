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
    <a href=index.php><img src="../imgs/pet_profiles_no_background.png" alt="logo" id="logo" style="float:left; position: absolute; margin-top: -20px; height: 150px; width: 200px;"><a>
    <h1>Pet Profiles </h1>
    <?PHP require("navbar.php");?>
</div>

<div>
    <div> 
    <h2> Pets On Campus</h2>
    <p> Here you can see all the pets that have had profiles created so far! </p>
    
    <h3> Cats: </h3>
    </div>

     <div class="floater" display= "block" id ="profiles" style = "text-align: left; position: absolute;">
        <div id = "Angel" class="floater">
            <a href="../src/angel.php"><img src="../imgs/Angel.png" style="height:250px; width:200px; display:block; margin:auto;"> <p>Angel</p>
        </div>
        <div id = "Kyra" class="floater">
            <a href="../src/kyra.php"><img src="../imgs/Kyra.jpg" style="height:250px; width:200px; display:block; margin:auto;"><p>Kyra</p></a>
        </div>
        <div id = "Spencer" class="floater">
        <a href="../src/spencer.php"><img src="../imgs/Spencer.png" style="height:250px; width:200px; display:block; margin:auto;"><p>Spencer</p></a>
        </div>
    </div>   
    <div class="floater" style = "text-align: left; position: absolute; padding-top: 350px;">
        <h3>Dogs:</h3>

        
        <div id = "Moose" class="floater">
            <a href="../src/moose.php"><img src="../imgs/moose.jpg" style="height:250px; width:200px; display:block; margin:auto;"> <p>Moose</p>
        </div>
        <div id = "Bubba" class="floater">
            <a href="../src/bubba.php"><img src="../imgs/bubba.JPEG" style="height:250px; width:200px; display:block; margin:auto;"> <p>Bubba</p>
        </div>
        <div id = "Remus" class="floater">
            <a href="../src/remus.php"><img src="../imgs/remus.JPEG" style="height:250px; width:200px; display:block; margin:auto;"> <p>Remus</p></a>
        </div>
    </div>


    <footer>
        <p> Do you want to see your pet on this page? <a class="nav-item nav-link" href="petapplications.php">Click here</a> to fill out the form! </p>
    </footer>
</div>

</body>


</html>