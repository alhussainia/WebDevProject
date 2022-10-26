<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <h1>Pet Profiles </h1>
</head> 

<body>
    <div>
     
    <?PHP require("navbar.php");?>
    <h2> Pets On Campus</h2>
    <p> Here you can see all the pets that have had profiles created so far! </p>
    <h3> Cats </h3>
    </div>

    <div id ="profiles">
        <div id = "Angel" class="floater">
            <a href="../src/angel.php"><img src="../imgs/Angel.png" style="height:250px; width:200px; display:block; margin:auto;"> <p>Angel</p>
        </div>
        <div id = "Kyra" class="floater">
            <a href="../src/kyra.php"><img src="../imgs/Kyra.jpg" style="height:250px; width:200px; display:block; margin:auto;"><p>Kyra</p></a>
        </div>
        <div id = "Spencer" class="floater">
            <img src="../imgs/Spencer.png" style="height:250px; width:200px; display:block; margin:auto;"><p>Spencer</p> 
        </div>
</div>

<footer>
    <p> Do you want to see your pet on this page? <a class="nav-item nav-link" href="petapplications.php"> Click here </a> to fill out the form! </p>
</footer>

</body>


</html>