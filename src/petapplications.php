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
    <a href=index.php><img src="../imgs/pet_profiles_no_background.png" alt="logo" id="logo" style="float:left; position: relative; margin-top: -20px; height: 150px; width: 200px;"><a>
    <h1>Pet Applications</h1>
    <?PHP require("navbar.php");?>
</div>

<h2> Fill out an application today to create a profile for your pet! </h2>
<h3 style = "text-align: center;"> Complete the application below! </h3>


<div class = "forms"> <!--style="height: 25px; color: #004B98;">-->

    <div class="petform">
    <div class="pet_div"
    <section class = "forum">
    <form method="post">
    <!--<form method = post style="float:center; margin-right:20px; color: #004B98;">-->
        <br>
        Pet Name: <input name = "petName" type = "text">
        <br>
        <!-- Appearance:<br><br><textarea rows = "5" name = "appearance"></textarea> -->
 
    <br>
    Pet Color:  
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
        <br>
        <br>
        Personality: <textarea rows = "1" name = "personality"></textarea>
        <br>
        <br>
        Microchipped: <input name = "chipped" type = "checkbox" value = 1>Yes<input name = "no" type = "checkbox" value = 1>No
        <br>
        Chip ID#: <textarea rows = "1" name = "nature"></textarea>
        <br>
        <br>
        Animal Warnings?<input name = "yes" type = "checkbox" value = 1>Yes<input name = "no" type = "checkbox" value = 1>No
        <br>
        Explain: <textarea rows = "1" name = "nature"></textarea>
        <br>
        <br>
   <!--Species: 
    <select>  
        <option value="Select">Select</option>}
        <option value="Dog">Dog</option> 
        <option value="Cat">Cat</option>  
        <option value="Bird">Bird</option>  
        <option value="Reptile">Reptile</option>  
        <option value="Other">Other</option>  
    </select>   
    <br> 
    <br>
    Type of fur: 
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
        Pet DOB: <input type="date" id="start" name="trip-start" value="2022-10-30" min="1990-01-01" max="2022-12-31">
        <br>
        <br>
        Breed: <textarea rows = "1" name = "nature"></textarea>
    <br>
    <br> -->
    </div>
</div>

    <div class="animaldesc">
    <div class=animal_desc>
    Species: 
    <select>  
        <option value="Select">Select</option>}
        <option value="Dog">Dog</option> 
        <option value="Cat">Cat</option>  
        <option value="Bird">Bird</option>  
        <option value="Reptile">Reptile</option>  
        <option value="Other">Other</option>  
    </select>   
    <br> 
    <br>
    Type of fur: 
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
        Pet DOB: <input type="date" id="start" name="trip-start" value="2022-10-30" min="1990-01-01" max="2022-12-31">
        <br>
        <br>
        Breed: <textarea rows = "1" name = "nature"></textarea>
    </div>
</div>


    <div class= "ownerform">
    <div class=owner_div>
    <!--<form method = post style="align: right; margin-right:20px; color: #004B98;">-->
        Owner's Name: <input name = "petName" type = "text">
        <br>
        <br>
        <!--Cell-phone Number:<br><br><textarea name = "number"></textarea>-->
        Cell Phone Number: <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
        <br>
        <br>
        <!--E-mail<br><br><label>Email Address</label>-->
        E-mail: <input type="text" name="email_address" size="20"><mail></mail>
        <br>
        <br>
        Address: <textarea rows = "2" name = "nature"></textarea>
        <br>
        <br>
        Do you live on campus? <input name = "yes" type = "checkbox" value = 1>Yes<input name = "no" type = "checkbox" value = 1>No
        <br>
        Building: <textarea rows = "1" name = "nature"></textarea>
        <br>
        <br>
    </form>
    </div>
    </div>
</div>


<!--<div class = "submitbtn" style= "text-align: center; align: center;"> -->
<div>
<input value="Submit" title="Submit" type="submit" id="submit_btn" class="submit_btn">
<!--<div class = submit_btn> style= "text-align: center; align: center;">-->
    <!--<button type="button">Submit</button>-->
    <!--<div style="text-align: center; align: center;"><input type = "submit" value = "Submit"></div>-->
</div>
    </section>

</body>
</html>