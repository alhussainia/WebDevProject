<!DOCTYPE html>
<html lang="en">

<?PHP 
if(!isset($_GET["id"])) {
    echo "Error: Pet not found";
    exit;
}

require_once(__DIR__."/../functions/database_functions.php");
$pdo = connect_to_db();
$stmt = $pdo->prepare("SELECT * FROM petProfile WHERE petID=:id");
$stmt->execute([":id"=>$_GET["id"]]);
$pet = $stmt->fetch(PDO::FETCH_ASSOC);

if(!is_array($pet)) {
    echo "Error: Pet not found";
    exit;
}
?>

<head>
    <title><?php echo $pet["petName"]; ?>'s Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head> 
<body>
<?PHP $path = "../"; require(__DIR__."/../navbar.php"); ?>
<h1 style="margin-bottom: 50px;"><?php echo $pet["petName"]; ?>'s Profile </h1>

<img src="<?PHP global $GCLOUD; echo ($GCLOUD ? '../imgs/pet_profiles_no_background.png' : '../upload/'.$pet["petPic"]); ?>" style="width: 45%; display:block; margin:auto;">

<div style="margin-center: 0;">
    <h2><?php echo $pet["petName"]; ?>'s Info</h2>
    <p>Name: <?php echo $pet["petName"]; ?></p>
    <p>Species: <?php echo $pet["petSpecies"]; ?></p>
    <p>Birthday: <?php echo $pet["petBirthday"]; ?></p>
    <p>Breed: <?php echo $pet["petBreed"]; ?></p>
    <p>Color: <?php echo $pet["petColor"]; ?></p>
    <p>Fur Type: <?php echo $pet["petFur"]; ?></p>
    <p>Personality: <?php echo $pet["petPersonality"]; ?></p>
    <p>Chipped?: <?php echo $pet["petChip"]; ?></p>
    <p>Warnings: <?php echo $pet["petWarning"]; ?></p>
</div>
</body>
</html>