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
        <img src="../imgs/Angel.png" style="height:250px; width:200px; color: #004B98;">
        <div>Name: Angel Closs <BR>Found: The Dell on 9/18/22</div>
        </div>


    
        <div>
        <h3> Did you find a pet? </h3>
        <form method=post action=students.php>
        Pet First Name: <input name="first_name"><BR/>
        Pet Description: <input name="description"><BR/>
        Date Found: <input name="date"><BR/>
        Location Found:  <input name="location"><BR/>
        <input type="submit" value="Submit">
        </form>

    </div>
    </div>

    <footer>
        <p>If you have lost your pet, click <a class="nav-item nav-link" href="lost.php">here</a> to submit a lost report.<p>
</footer>


</body>

</html>