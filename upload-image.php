<?php 
include 'navbar.php';

// have our main values carried over from 'webpage-add.php'
$checkVal = true;
$fileToUpload = $_POST['fileToUpload'];

// check all data has been given a value
// shouldn't be an issue since our fields are required in 'webpage-add.php' but a good double check
if (empty($fileToUpload)) {
    $checkVal = false;
    echo 'No value entered for photo';
}
// if validated we want to connect to the database
if ($checkVal) {
    $db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');
    $sql = "INSERT INTO photo (photoUrl) VALUES (:photoUrl)";
    $cmd = $db->prepare($sql);


    $cmd->bindParam(':photoUrl', $fileToUpload, PDO::PARAM_STR, 500);

    $cmd->execute();

    $db = null;

    echo 'Photo Added!';

}