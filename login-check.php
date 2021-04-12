<?php
//carry over required data from 'login.php'
$email = $_POST['email'];
$password = $_POST['password'];

//connect to db
$db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');

// query setup
$sql ="SELECT * FROM registerUsers WHERE email = :email";
$cmd = $db->prepare($sql);
$cmd->bindParam(':email', $email, PDO::PARAM_STR, 100);
$cmd->execute();
$emails = $cmd->fetch();

// runs if email doesn't exist.
if (!$emails) {
    $db = null;
    header('location:login.php?invalid=true');
}
else {
    // converts to hash.
    if (password_verify($password, $emails['password'])) {
        session_start(); 
        $_SESSION['email'] = $email;

        //brings user to home page once they login
        $db = null;
        header('location:index.php');
    }
    else {
        // disconnect
        $db = null;

        // Login didn't work, goes back to login page
        header('location:login.php?invalid=true');
    }
}
?>