<?php 
include 'navbar.php';

// have our main values carried over from 'webpage-add.php'
$checkVal = true;
$title = $_POST['title'];
$content = $_POST['content'];

// check all data has been given a value
// shouldn't be an issue since our fields are required in 'webpage-add.php' but a good double check
if (empty($title)) {
    $checkVal = false;
    echo 'No value entered for Title';
}
if (empty($content)) {
    $checkVal = false;
    echo 'No value entered for Content';
}

// if validated we want to connect to the database
if ($checkVal) {
    $db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');
    $sql = "INSERT INTO webpages (pageName, pageDesc) VALUES (:title, :content)";
    $cmd = $db->prepare($sql);


    $cmd->bindParam(':title', $title, PDO::PARAM_STR, 100);
    $cmd->bindParam(':content', $content, PDO::PARAM_STR, 100);

    $cmd->execute();

    $db = null;

    echo 'Webpage Added!';

}