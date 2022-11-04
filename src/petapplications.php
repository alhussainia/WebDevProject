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
    <h1>Pet Applications</h1>
    <?PHP require("navbar.php");?>
</div>

    <h2> Interested In Having Your Pet Featured? </h2>
    <h3 style = "text-align: center;"> Complete the application below! </h3>

    <div class = "forms" style="height: 400px; color: #004B98;">
    <div class="petform">
    <section class = "forum">
    <form method = post style="float:right; margin-right:20px; color: #004B98;">
        Pet Name:<br><br> <input name = "petName" type = "text">
        <br>
        <br>
        Appearance:<br><br><textarea rows = "5" name = "appearance"></textarea>
        <br>
        <br>
        Nature:<br><br><textarea rows = "5" name = "nature"></textarea>
        <br>
        <br>
        Microchipped: <input name = "chipped" type = "checkbox" value = 1>
    </form>
    </div>

    <div class= "ownerform">
    <form method = post" style="float:left; margin-left:20px; color: #004B98;">
        Owner's Name: <br><br> <input name = "petName" type = "text">
        <br>
        <br>
        Cell-phone Number:<br><br><textarea name = "number"></textarea>
        <br>
        <br>
        E-mail<br><br><textarea name = "e-mail"></textarea>
        <br>
        <br>
    </form>
    </div>
    </div>
    <div style="text-align: center;"><input type = "submit" value = "Submit"></div>
    </section>
</body>
</html>