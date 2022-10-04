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
    <h2 style = "text-align:center;"> Pets On Campus</h2>
    <h3> Cats </h3>
    </div>

    <div id ="profiles">
        <div id = "Angel" class="floater">
            <img src="../imgs/Angel.png" style="height:250px; width:200px; display:block; margin:auto;"> <p>Angel</p>
        </div>
        <div id = "Kyra" class="floater">
            <a href="../src/kyra.php"><img src="../imgs/Kyra.jpg" style="height:250px; width:200px; display:block; margin:auto;"><p>Kyra</p></a>
        </div>
        <div id = "Spencer" class="floater">
            <img src="../imgs/Spencer.png" style="height:250px; width:200px; display:block; margin:auto;"><p>Spencer</p> 
        </div>
</div>
</body>


</html>