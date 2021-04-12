<?php
if (is_numeric($_GET['webpageId'])) {
    // read the itemId from the URL parameter using the $_GET collection
    $webpageId = $_GET['webpageId'];

    // connect
    $db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');

    // set up & run the SQL DELETE command
    $sql = "DELETE FROM webpages WHERE webpageId = :webpageId";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':webpageId', $webpageId, PDO::PARAM_INT);
    $cmd->execute();

    // disconnect
    $db = null;

}
header('location:webpages.php');
?>