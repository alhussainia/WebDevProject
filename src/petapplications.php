<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <h1>Pet Applications</h1>
</head> 

<body>
    
    <?PHP require("navbar.php");?>
    <h1> Interested In Having Your Pet Featured? </h1>
    <h2 style = "text-align: center;"> Complete the application below! </h2>

    <section class = "forum">
    <form method = post>
        Pet Name: <input name = "petName" type = "text">
        <br>
        <br>
        Appearance: <textarea rows = "5" name = "appearance"></textarea>
        <br>
        <br>
        Nature: <textarea rows = "5" name = "nature"></textarea>
        <br>
        <br>
        Microchipped: <input name = "chipped" type = "checkbox" value = 1>
        <br>
        <br>
        <input type = "submit" value = "Submit">
    </form>
    </section>
</body>

</html>