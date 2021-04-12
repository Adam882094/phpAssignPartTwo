<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nav</title>
 
    <!-- link to custom js file to use delete confirmation function -->
    <script type="text/javascript" src="scripting.js">defer</script> 
 

</head>
<body>
<div class="black">
  <a href="index.php" class="button">Home</a>
  <a href="registered-users.php" class="button">Registered Users List</a>
  <a href="webpages.php" class="button">Webpage List</a>
  <a href="webpage-add.php" class="button">Add Webpage</a>
                <?php
                $db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');

                $sql = "SELECT * FROM webpages";
                
                $cmd = $db->prepare($sql);
                
                $cmd->execute();
                
                $database = $cmd->fetchAll();
                
                foreach ($database as $d)
                {
                    echo ' <tr><td><a href="page.php">'. $d['pageName'] . '</a></td>';
                }
                $db = null;
                ?>
                <?php
                session_start();
                if (empty($_SESSION['email'])) {
                ?>
                        <a  href="register.php">Register</a>
                        <a  href="login.php">Login</a>
                <?php
                }
                else {
                ?>
                        <a  href="#"><?php echo $_SESSION['email']; ?></a>
                        <a href="logout.php">Logout</a>
                <?php } ?>
</div>
</body>