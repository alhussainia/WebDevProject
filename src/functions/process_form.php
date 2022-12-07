<?PHP
require_once("database_functions.php");
require_once("upload.php");
if(isset($_POST["formType"])) {
    switch($_POST["formType"]) {
        case "application":
            process_application($_POST);
            header("location:../petprofiles.php");
            break;
        case "lost":
            add_lost_pet($_POST);
            header("location:../lost.php");
            break;
        case "found":
            add_found_pet($_POST);
            header("location:../found.php");
            break;
        default:
            exit;
    }
}

function process_application($data) {
    if(!isset($data["petChip"]))
        $data["petChip"] = "";
    $pdo = connect_to_db();
    $ownerStmt = $pdo->prepare("INSERT INTO owner (ownerFirst,ownerLast,ownerCell,ownerEmail) VALUES (:ownerFirst,:ownerLast,:ownerCell,:ownerEmail);");
    $ownerStmt->execute([":ownerFirst"=>$data["ownerFirst"],":ownerLast"=>$data["ownerLast"],":ownerCell"=>$data["ownerCell"],":ownerEmail"=>$data["ownerEmail"]]);
    $ownerID = $pdo->lastInsertId();
    $stmt = $pdo->prepare("INSERT INTO petProfile (petName,petSpecies,petBirthday,petBreed,petColor,petFur,petPersonality,petChip,petWarning,ownerID) VALUES (:petName,:petSpecies,:petBirthday,:petBreed,:petColor,:petFur,:petPersonality,:petChip,:petWarning,:ownerID);");
    $stmt->execute([":petName"=>$data["petName"],":petSpecies"=>$data["petSpecies"],":petBirthday"=>$data["petBirthday"],":petBreed"=>$data["petBreed"],":petColor"=>$data["petColor"],":petFur"=>$data["petFur"],":petPersonality"=>$data["petPersonality"],":petChip"=>$data["petChip"],":petWarning"=>$data["petWarning"],":ownerID"=>$ownerID]);
    
    $petID = $pdo->lastInsertId();
    $fileEnding = pathinfo($_FILES["petPic"]["name"])["extension"];
    $newName = "pet_".$petID.".".$fileEnding;
    receiveUpload("petPic",$newName);
    $updateStmt = $pdo->prepare("UPDATE petProfile SET petPic = :petPic WHERE petID = :id;");
    $updateStmt->execute([":petPic"=>$newName,":id"=>$petID]);
    var_dump($newName);
}

function add_lost_pet($data) {
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("INSERT INTO lostPet (lostPetName,lostPetLastname,missingDate,lastSeen) VALUES (:lostPetName,:lostPetLastname,:missingDate,:lastSeen);");
    $stmt->execute([":lostPetName"=>$data["lostPetName"],":lostPetLastname"=>$data["lostPetLastname"],":missingDate"=>$data["missingDate"],":lastSeen"=>$data["lastSeen"]]);

    $lostPetID = $pdo->lastInsertId();
    $fileEnding = pathinfo($_FILES["lostPic"]["full_path"])["extension"];
    $newName = "lost_".$lostPetID.".".$fileEnding;
    receiveUpload("lostPic",$newName);
    $updateStmt = $pdo->prepare("UPDATE lostPet SET lostPic = :lostPic WHERE lostPetID = :id;");
    $updateStmt->execute([":lostPic"=>$newName,":id"=>$lostPetID]);
}

function add_found_pet($data) {
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("INSERT INTO foundPet (foundPetName,foundPetDescription,foundDate,locationFound) VALUES (:foundPetName,:foundPetDescription,:foundDate,:locationFound);");
    $stmt->execute([":foundPetName"=>$data["foundPetName"],":foundPetDescription"=>$data["foundPetDescription"],":foundDate"=>$data["foundDate"],":locationFound"=>$data["locationFound"]]);

    $foundPetID = $pdo->lastInsertId();
    $fileEnding = pathinfo($_FILES["foundPic"]["full_path"])["extension"];
    $newName = "found_".$foundPetID.".".$fileEnding;
    receiveUpload("foundPic",$newName);
    $updateStmt = $pdo->prepare("UPDATE foundPet SET foundPic = :foundPic WHERE foundPetID = :id;");
    $updateStmt->execute([":foundPic"=>$newName,":id"=>$foundPetID]);
}