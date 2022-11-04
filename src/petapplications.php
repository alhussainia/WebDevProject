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
    <!--<form method = post style="float:center; margin-right:20px; color: #004B98;">-->
        Pet Name:<br> <input name = "petName" type = "text">
        <br>
        <!-- Appearance:<br><br><textarea rows = "5" name = "appearance"></textarea> -->
    <html>  
    <head></head>  
    <body>
        <br>
    Pet Color:  
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
        Nature:<br><textarea rows = "3" name = "nature"></textarea>
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

    <div class = "petinfo">
    <!--<form method = post style="float:center; margin-right:800px; color: #004B98;">-->
    <html>  
    <head></head>  
    <body>
    Species:  
    <br>
    <select>  
        <option value="Select">Select</option>}
        <option value="Dog">Dog</option> 
        <option value="Cat">Cat</option>  
        <option value="Bird">Bird</option>  
        <option value="Reptile">Reptile</option>  
        <option value="Other">Other</option>  
        </select>   
    </body>  
    <html> 
    <br> 
    <br>
    <html>  
    <head></head>  
    <body>
    Type of fur:  
    <br>
    <select>  
        <option value="Select">Select</option>}
        <option value="Short">Short</option> 
        <option value="Long">Long</option>  
        <option value="Curly">Curly</option>  
        <option value="Hairless">Hairless</option>  
        <option value="Other">Other</option>  
        </select>  
        <br>
        <br> 
    </body>  
    <html> 
        <br>
        Pet DOB:<input type="date" id="start" name="trip-start" value="2022-10-30" min="1990-01-01" max="2022-12-31">
    </div>
    <br>



    <div class= "ownerform">
    <!--<form method = post style="float:center; margin-left:20px; color: #004B98;">-->
        Owner's Name:<br> <input name = "petName" type = "text">
        <br>
        <br>
        <!--Cell-phone Number:<br><br><textarea name = "number"></textarea>-->
        Cell Phone Number:<br><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
        <br>
        <br>
        <!--E-mail<br><br><label>Email Address</label>-->
        E-mail:<br><input type="text" name="email_address" size="20"><mail></mail>
        <br>
        <br>
        Address:<br> <textarea rows = "2" name = "nature"></textarea>
        <br>
        <br>
    </form>
    </div>
    </div>
    <div style="text-align: center;"><input type = "submit" value = "Submit"></div>
    </section>
</body>
</html>