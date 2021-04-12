<?php
if (is_numeric($_GET['userId'])) {
    // read the itemId from the URL parameter using the $_GET collection
    $userId = $_GET['userId'];

    // connect
    $db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');

    // set up & run the SQL DELETE command
    $sql = "DELETE FROM registerUsers WHERE userId = :userId";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':userId', $userId, PDO::PARAM_INT);
    $cmd->execute();

    // disconnect
    $db = null;

    // return to the updated items.php page
}
header('location:registered-users.php');
?>