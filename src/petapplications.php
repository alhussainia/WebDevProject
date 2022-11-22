
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
    <h1>Pet Applications</h1>
    <?PHP require("navbar.php");?>
</div>

<h2> Fill out an application today to create a profile for your pet! </h2>
<h3 style = "text-align: center;"> Complete the application below! </h3>
<form method="post" id="surveyForm">
    <h3> Owner: </h3>
    Owner's First Name: <input name="ownerFirst" type="text"><BR/>
    Owner's Last Name: <input name="ownerLast" type="text"><BR/>
    Cellphone Number: <input name="ownerCell" type="tel"><BR/>
    E-mail: <input name="ownerEmail" type="text"><BR/>

    <h3> Pet: </h3>
    Pet Name: <input name="petName" type="text"><BR/>
    Pet Species: <input name="petSpecies" type="text"><BR/>
    Pet Date of Birth: <input name="petBirthday" type="text"><BR/>
    Pet Breed: <input name="petBreed" type="text"><BR/>
    Pet Color: <select name="petColor">
    <option value = "">--Select--</option>
    <option value="Black">Black</option>
    <option value="White">White</option>
    <option value="Orange">Orange</option>
    <option value="Gray">Gray</option>
    <option value="Brown">Brown</option>
    <option value="Red">Red</option>
    <option value="Orange">Orange</option>
    <option value="Yellow">Yellow</option>
    <option value="Gold">Gold</option>
    <option value="Tan">Tan</option>
    <option value="Cream">Cream</option>
    <option value="Brindle">Brindle</option>
    <option value="Tri-color">Tri-color</option>
    <option value="Multi-color">Multi-color</option>
    <option value="Other">Other</option>
    </select><br/>
    Pet Fur Type:<select name="petFur">
    <option value = "">--Select--</option>
    <option value="Short">Short</option>
    <option value="Long">Long</option>
    <option value="Curly">Curly</option>
    <option value="Hairless">Hairless</option>
    <option value="Other">Other</option>
    </select><br/>
    Pet Personality: <input name="petPersonality" type="text"><BR/>
    Is your pet microchipped?</br>
    <input type="radio" name = "petChip" id="chipChoice1">
        <label for="chipChoice1">Yes</label><br>
    <input type="radio" name = "petChip" id="chipChoice2">
        <label for="chipChoice2">No</label><br>
    Pet Warnings: <input name="petWarning" type="text" placeholder="Ex. Bites when scared"><BR/>
    Pet Picture: <input type="file" id="lostPic" name="lostPic"
       accept="image/png, image/jpeg, image/heic"><BR/>

       <input type="submit" value="Submit">
</form>