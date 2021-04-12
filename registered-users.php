<?php
include 'navbar.php';
$db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');
include 'check.php';

$sql = "SELECT * FROM registerUsers";

$cmd = $db->prepare($sql);

$cmd->execute();

$database = $cmd->fetchAll();
echo '<h1>Admin List</h1>';
echo '<table><thead><th>Email</th><th>First Name</th><th>Last Name</th><th>Action</th></thead>';

foreach ($database as $d)
{
    echo ' <tr><td> '. $d['email'] . '</td>
      <td> '. $d['fname'] . '</td> 
      <td> '. $d['lname'] . '</td> 
     <td><a href="delete-admin.php?userId=' . $d['userId'] .
     '" title="Delete",
     onclick="return confirmDelete();">Delete Item</a></td></tr>';
}
echo '</table>';
$db = null;
?>