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

    <div style="width: 25%; float: left; margin-left: 15px;"> 
        <h2> Lost Pets: </h2>
        <img src="../imgs/Spencer.png" style="width: 40%;">
        <p>Name: Spencer Shreiner <BR>Lost: Brinser Field on 9/22/22</p>

        
        <div style= "width: 95%; float: left; margin-left: 0px;">
        <h2> Found Pets: </h2>
        <img src="../imgs/Angel.png" style="width: 40%;">
        <p>Name: Angel Closs <BR>Found: The Dell on 9/18/22</p>

        </div>
    </div> 

    <div style= "width: 70%; float: right; margin-right: 15px;">
        <h2> Purpose of this Page: </h2>
        <p> The purpose of this page is for pet owners to update information on their pets if they go missing to help find missing pets on campus. </p>


        <div style= "width: 50%; float: left; margin-left: 0px;">
        <h2> Lost Your Pet? </h2>
        <form method=post action=students.php>
        Pet First Name: <input name="first_name"><BR/>
        Pet Last Name: <input name="last_name"><BR/>
        Date Missing: <input name="date"><BR/>
        Last Seen Here: <input name="last_seen"><BR/>
        <input type="submit" value="Submit">
        </form>

        </div>

        <div style= "width: 50%; float: right; margin-right: 0px;">
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