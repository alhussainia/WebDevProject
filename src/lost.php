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
        <img src="../imgs/Spencer.png" style="height:250px; width:200px; color: #004B98;">
        <div>Name: Spencer Shreiner <BR>Lost: Brinser Field on 9/22/22</div>
    </div>

    <div>
        <h3> Lost Your Pet? </h3>
        <form method=post action=students.php>
        Pet First Name: <input name="first_name"><BR/>
        Pet Last Name: <input name="last_name"><BR/>
        Date Missing: <input name="date"><BR/>
        Last Seen Here: <input name="last_seen"><BR/>
        <input type="submit" value="Submit">
        </form>

    </div>

    <footer>
    <p>If you have found someone's  pet, click <a class="nav-item nav-link" href="found.php">here</a> to submit a found report.</p>
    </footer>

</body>
</html>