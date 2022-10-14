<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <h1>Lost and Found </h1>
</head> 

<body>
     
    <?PHP require("navbar.php");?>

    <div>
        <h2> Purpose of this Page: </h2>
        <p> The purpose of this page is for pet owners to update information on their pets if they go missing to help find missing pets on campus. </p>

        
        <div>
        <h2> Found Pets: </h2>
        <img src="../imgs/Angel.png" style="height:250px; width:200px;">
        <p>Name: Angel Closs <BR>Found: The Dell on 9/18/22</p>
        </div>


    
        <div>
        <h2> Did you find a pet? </h2>
        <form method=post action=students.php>
        Pet First Name: <input name="first_name"><BR/>
        Pet Description: <input name="description"><BR/>
        Date Found: <input name="date"><BR/>
        Location Found:  <input name="location"><BR/>
        <input type="submit" value="Submit">
        </form>

    </div>
    </div>

</body>

</html>