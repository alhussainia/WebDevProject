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

    <h2> Purpose of this Page: </h2>
        <p>The purpose of this page is for pet owners to update information on their pets if they go missing to help find missing pets on campus.</p>

    <div> 
        <h2> Lost Pets: </h2>
        <img src="../imgs/Spencer.png" style="height:250px; width:200px;">
        <p>Name: Spencer Shreiner <BR>Lost: Brinser Field on 9/22/22</p>
    </div>

    <div>
        <h2> Lost Your Pet? </h2>
        <form method=post action=students.php>
        Pet First Name: <input name="first_name"><BR/>
        Pet Last Name: <input name="last_name"><BR/>
        Date Missing: <input name="date"><BR/>
        Last Seen Here: <input name="last_seen"><BR/>
        <input type="submit" value="Submit">
        </form>

    </div>