<?PHP
require_once("database_functions.php");
function receiveUpload($fileName,$newFileName) {
    //Make sure upload directory exists
    if (!file_exists(__DIR__.'/../upload')) {
        mkdir(__DIR__.'/../upload', 0777, true);
    }

    if(isset($_FILES[$fileName])) {
        $filePath = $_FILES[$fileName]["tmp_name"];
        global $GCLOUD;
        $newFilePath = $GCLOUD ? "/tmp/".$newFileName : __DIR__.'/../upload/'.$newFileName;
        //Remove and replace file if already exists
        if(file_exists($newFilePath)) {
            unlink($newFilePath);
        }
        move_uploaded_file($_FILES[$fileName]["tmp_name"], $newFilePath);
    }
}
?>