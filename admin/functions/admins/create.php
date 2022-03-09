<?php
session_start();
?>

<?php
if (isset($_SESSION['email']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 1 or $_SESSION['role'] != 2) {
        header("Location: db_signin.php?error=1");
        break;
    }
?>

<?php
} else header("Location: db_signin.php?error=1");
break;
?>

<?php

include_once '../../includes/config.php';

?>

<?php include '../../includes/get.php' ?>

<?php
if (isset($_POST['submit'])) {

    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $role = htmlspecialchars($_POST['role']);
    $pw = htmlspecialchars($_POST['password']);

    $email_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $email_check_query);
    if (mysqli_num_rows($result) > 0) { // if email exists
        // Alert déjà  existant
        header("Location: ../../addAdmin.php?erreur=1");
        break;
    }
    // create user if there are no errors in the form
    else {
        $query = "INSERT INTO user (role, first_name, last_name, email, password) VALUES ('$role','$firstName', '$lastName', '$email', '$pw')";
        mysqli_query($db, $query);

        // Alert réussite
        header('location: ../../admins.php?success=1');
        break;
    }
}
mysqli_close($db);
