<?PHP
function receiveUpload($fileName,$newFileName) {
    //Make sure upload directory exists
    if (!file_exists('../upload')) {
        mkdir('../upload', 0777, true);
    }

    if(isset($_FILES[$fileName])) {
        $filePath = $_FILES[$fileName]["tmp_name"];
        $newFilePath = '../upload/'.$newFileName;
        //Remove and replace file if already exists
        if(file_exists($newFilePath)) {
            unlink($newFilePath);
        }

        move_uploaded_file($_FILES[$fileName]["tmp_name"], $newFilePath);
    }
}
?>