<?php
include 'navbar.php';
include 'check.php';
$db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');

$sql = "SELECT * FROM webpages";

$cmd = $db->prepare($sql);

$cmd->execute();

$dataWeb = $cmd->fetchAll();
echo '<h1>Webpage List</h1>';
echo '<table><thead><th>Title</th><th>Action</th></thead>';

foreach ($dataWeb as $d)
{
    echo ' <tr><td> '. $d['pageName'] . '</td>
     <td><a href="delete-webpage.php?webpageId=' . $d['webpageId'] .
     '" title="Delete",
     "onclick="return confirmDelete();">Delete Item</a></td></tr>';
}
echo '</table>';
$db = null;
?>
