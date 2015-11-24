<?php
require_once "dropbox-sdk/Dropbox/autoload.php";
use \Dropbox as dbx;
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if($FileType != "csv" ) {
        echo "Sorry, only csv files are allowed.";
        $uploadOk = 0;
    }
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
*/
// Check file size
/*if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
*/
// Allow certain file formats


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
if ($uploadOk==1) {
    $accessToken = "RhUHA_3bYAsAAAAAAAAAKFPP6W9Sv3yhCVVCun37FpkqOYSDvIYPanrtRw1GOFG7";
    $dbxClient = new dbx\Client($accessToken, "Software_Methodologies_App");

    $f = fopen($_FILES["fileToUpload"]["tmp_name"], "rb");
    $result = $dbxClient->uploadFile("/Software_Methodologies/Input/actual.csv", dbx\WriteMode::force(), $f);
    fclose($f);
    echo "Your file was a csv and was uploaded.";
}

/* else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";



    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
?>
