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
    <h1>Elizabethtown College's Pet Profiles</h1>
    <?PHP require("navbar.php");?>
    </div>

    <div style="width: 30%; float: left; margin-left: -140px; padding-top: 50px; position: float;">
        <h2> About Us: </h2>
            <p> The Elizabethtown College's Pet Profiles website was created for the students of ETown College and their pets.
                This website will allow students with a Service Animal (SA), Emotional Support Animal (ESA), or an Assitance Animal (AA) to create
                a profile for their pet. It will also allow students to post lost or found animals on campus. This website was 
                made to help the students on campus with ESAs or AAs find their pets faster when they have been lost. Also, 
                we hope to spread more awareness about these animals, their roles, and how important they are to their owners. 
            </p>
        <h2> Helpful Links: </h2>
            <p>Here you can find some links that will tell you more information about SAs, ESAs, and AAs</p>
            <ul>
                <li><a href="https://adata.org/guide/service-animals-and-emotional-support-animals"> ADA Service Animals and Emotional Support Animals </a></li>
                <li><a href="https://www.avma.org/resources-tools/animal-health-and-welfare/service-emotional-support-and-therapy-animals"> American Veterinary Medical Association </a></li>
            </ul>
        </div>

    <div style="width: 60%; float: right; margin-right: 15px; color: #004B98; padding-top: 50px;"> 
        <h2> Pet Spotlight: </h2>
        <div style="background-color: #bed2fe; border: 10px solid #004B98;">
        <?PHP 
        echo "<p id='petName' style='font-size: 20px'>Pet's Name: </p>";
        echo "<p id='petOwner' style='font-size: 20px'>Owner: </p>";
        echo "<img id='petImage' style='margin-left: 340px; height:250px;'>";
        echo "<p id='petFact' style='font-size: 20px; padding-left:100px; padding-right:100px;'>Fun Fact: </p>";
        ?>
        </div>
    </div>
    <script src="js/index_functions.js"></script>

</body>
</html>