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

    <div style="width: 25%; float: left; margin-left: 15px; padding-bottom: 10px;"> 
        <h2> Lost Pets: </h2>
        <img src="../imgs/Spencer.png" style="width: 100%;">
        
        <div style= "width: 95%; float: left; margin-left: 15px; padding-bottom: 10px;">
        <h2> Found Pets: </h2>
        <img src="../imgs/Angel.png" style="width: 100%;">

        </div>
    </div> 

    <div style= "width: 70%; float: right; margin-right: 15px;">
        <h2> Purpose of this Page: </h2>
        <p> The purpose of this page is for pet owners to update information on their pets if they go missing to help find missing pets on campus. </p>

        </div>

        <div style= "width: 70%; float: right; margin-right: 15px;">
        <h2> Enter missing pet info here: </h2>
        <form method=post action=students.php>
        Pet First Name: <input name="first_name"><BR/>
        Pet Last Name: <input name="last_name"><BR/>
        Date Missing: <input name="last_name"><BR/>
        Last Seen Here: <input name="last_name"><BR/>
        <input type="submit" value="Enter">
        </form>

        </div>

        <div style= "width: 70%; float: right; margin-right: 15px;">
        <h2> If your pet was found enter: </h2>
        <form method=post action=students.php>
        Pet First Name: <input name="first_name"><BR/>
        Pet Last Name: <input name="last_name"><BR/>
        Pet Found <input name="Pet Found" type="checkbox" value="1" '.$checked.'><BR/>
        <input type="submit" value="Enter">
        </form>

    </div>

</body>

</html>