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
    <h2> Interested In Having Your Pet Featured? </h2>
    <h3 style = "text-align: center;"> Complete the application below! </h3>

    <div class = "forms" style="height: 400px; color: #004B98;">
    <div class="petform">
    <section class = "forum">
    <form method = post style="float:right; margin-right:20px; color: #004B98;">
        Pet Name:<br><br> <input name = "petName" type = "text">
        <br>
        <br>
        <!-- Appearance:<br><br><textarea rows = "5" name = "appearance"></textarea> -->
    <html>  
    <head></head>  
    <body>
    Pet Color:  
    <br>
    <br>
    <select>  
        <option value="Select">Select</option>}
        <option value="Black">Black</option> 
        <option value="White">White</option>  
        <option value="Orange">Orange</option>  
        <option value="Grey">Grey</option>  
        <option value="Brown">Brown</option>  
        <option value="Tan">Tan</option>  
        <option value="Multi-color">Multi-colored</option>  
        <option value="Cream">Cream</option>  
        <option value="Other">Other</option>  
        </select>   
    </body>  
    <html> 
        <br>
        <br>
        Nature:<br><br><textarea rows = "3" name = "nature"></textarea>
        <br>
        <br>
        Microchipped: <input name = "chipped" type = "checkbox" value = 1>Yes<input name = "no" type = "checkbox" value = 1>No
        <br>
        Chip ID#:<textarea rows = "1" name = "nature"></textarea>
        <br>
        <br>
        <br>
        Animal Warnings?<input name = "yes" type = "checkbox" value = 1>Yes<input name = "no" type = "checkbox" value = 1>No
        <br>
        Explain:<textarea rows = "1" name = "nature"></textarea>
        <br>
        <br>
    </form>
    </div>

    <div class= "ownerform">
    <form method = post style="float:left; margin-left:20px; color: #004B98;">
        Owner's Name: <br><br> <input name = "petName" type = "text">
        <br>
        <br>
        <!--Cell-phone Number:<br><br><textarea name = "number"></textarea>-->
        Cell Phone Number:<br><br><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
        <br>
        <br>
        <!--E-mail<br><br><label>Email Address</label>-->
        E-mail:<br><br><input type="text" name="email_address" size="20"><mail></mail>
        <br>
        <br>
    </form>
    </div>
    </div>
    <div style="text-align: center;"><input type = "submit" value = "Submit"></div>
    </section>
</body>
</html>