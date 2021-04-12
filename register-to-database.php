<?php 
include 'navbar.php';

// have our main values carried over from 'register.php'
$checkVal = true;
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$passwordCheck = $_POST['passwordCheck'];

// check all data has been given a value
// shouldn't be an issue since our fields are required in 'register.php' but a good double check
if (empty($email)) {
    $checkVal = false;
    echo 'No value entered for email';
}
if (empty($fname)) {
    $checkVal = false;
    echo 'No value entered for First Name';
}
if (empty($lname)) {
    $checkVal = false;
    echo 'No value entered for Last Name';
}
if (empty($password)) {
    $checkVal = false;
    echo 'No value entered for password';
}
if ($password != $passwordCheck) {
    $checkVal = false;
    echo 'The passwords do not match one another';
}

// if validated we want to connect to the database
if ($checkVal) {
    $db = new PDO('mysql:host=172.31.22.43;dbname=Adam882094', 'Adam882094', '842ojmV_vQ');
    // Make sure we don't have more than one email
    $sql = "SELECT userId FROM registerUsers WHERE email = :email";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':email', $email, PDO::PARAM_STR, 100);
    $cmd->execute();
    $emails = $cmd->fetch();
 
        if ($emails) {
            // sees emails exists and refuses to register account
            echo 'This email is already in use';
            $db = null;
            exit(); 
        }
    $sql = "INSERT INTO registerUsers (email, fname, lname, password) VALUES (:email, :fname, :lname, :password)";
    $cmd = $db->prepare($sql);

    // hashes password then adds all data into sql database
    $password = password_hash($password, PASSWORD_DEFAULT);
    $cmd->bindParam(':email', $email, PDO::PARAM_STR, 100);
    $cmd->bindParam(':fname', $fname, PDO::PARAM_STR, 100);
    $cmd->bindParam(':lname', $lname, PDO::PARAM_STR, 100);
    $cmd->bindParam(':password', $password, PDO::PARAM_STR, 128);

    $cmd->execute();

    $db = null;

    echo 'User Registered! Go to Login to sign in!';

}
